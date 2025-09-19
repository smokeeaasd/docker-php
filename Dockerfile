FROM php:8.4-apache

# Set working directory
WORKDIR /var/www/html

# Copy application files from local "App" folder to container working directory
COPY App/ .

# Install PHP extensions.
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Expose Apache port
EXPOSE 80
