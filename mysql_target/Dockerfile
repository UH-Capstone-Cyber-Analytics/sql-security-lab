# Dockerfile (mysql_target/Dockerfile)
FROM mysql:latest

# Set MySQL root password
ENV MYSQL_ROOT_PASSWORD=root

# Create a database named 'testdb'
ENV MYSQL_DATABASE=testdb

# Create a user 'testuser' with password 'testpass'
ENV MYSQL_USER=testuser
ENV MYSQL_PASSWORD=testpass

# table to be auto-created whenever the MySQL container starts
COPY init.sql /docker-entrypoint-initdb.d/

# Expose the default MySQL port
EXPOSE 3306

