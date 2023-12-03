FROM php:8.1.1-apache

# Install the MySQL extension
RUN docker-php-ext-install mysqli

# Set the PORT environment variable
ENV PORT=80

# Copy application files
COPY . /var/www/html
COPY ./init.sql /docker-entrypoint-initdb.d/init.sql
COPY ./ports.conf /etc/apache2/ports.conf
COPY ./apache.conf /etc/apache2/sites-enabled/000-default.conf
CMD apache2-foreground -DFOREGROUND -e info -D MPM=event