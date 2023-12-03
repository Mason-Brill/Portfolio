FROM php:8.1.1-apache

# Install the MySQL extension
RUN docker-php-ext-install mysqli

COPY ./init.sql /docker-entrypoint-initdb.d/init.sql