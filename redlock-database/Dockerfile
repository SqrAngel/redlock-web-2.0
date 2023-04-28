FROM mysql:latest

# Set the root password for MySQL
ENV MYSQL_ROOT_PASSWORD=root

# Copy the SQL file to initialize the database
COPY ./redlock-db.sql /docker-entrypoint-initdb.d/redlock-db.sql
