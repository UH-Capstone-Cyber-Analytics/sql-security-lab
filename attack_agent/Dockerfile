# attack_agent/Dockerfile
FROM python:3.10-slim

# Update apt and install necessary tools (nmap, sqlmap, etc.)
RUN apt-get update && apt-get install -y \
    nmap \
    sqlmap \
    && rm -rf /var/lib/apt/lists/*

# Copy local attack scripts into the container
COPY ./attack_scripts /usr/src/attack_scripts

# Set work directory
WORKDIR /usr/src/attack_scripts

# Default command (will run a Python script)
CMD ["python", "main.py"]

