FROM php:8.1.1-apache

# Install the MySQL extension
RUN docker-php-ext-install mysqli

# Copy app files
COPY ./ /var/www/html/

# Copy MySQL initialization script
COPY ./init.sql /docker-entrypoint-initdb.d/init.sql

# Copy Apache configuration files
COPY ./ports.conf /etc/apache2/ports.conf
COPY ./apache.conf /etc/apache2/sites-enabled/000-default.conf
