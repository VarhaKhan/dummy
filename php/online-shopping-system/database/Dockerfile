# Use the official MySQL image
FROM mysql:latest

# Copy the initialization SQL script into the container
COPY onlineshop.sql /docker-entrypoint-initdb.d/

# Set environment variables for MySQL
ENV MYSQL_ROOT_PASSWORD=root
ENV MYSQL_DATABASE=database
ENV MYSQL_USER=edureka
ENV MYSQL_PASSWORD=admin

# Set the default authentication plugin to 'mysql_native_password'
RUN { \
    echo '[mysqld]'; \
    echo 'default_authentication_plugin=mysql_native_password'; \
} > /etc/mysql/conf.d/mysql.cnf

