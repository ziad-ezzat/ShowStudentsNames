# Base image
FROM php:7.4-apache

# Install required packages
RUN apt-get update \
    && apt-get install -y \
        libzip-dev \
        zip \
        unzip \
        git

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql \
    && docker-php-ext-install zip \
    && docker-php-ext-enable zip

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set the working directory
WORKDIR /var/www/html

# Copy the Laravel project files to the container
COPY . .

# Install composer and the project dependencies
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && composer install --no-dev --prefer-dist --optimize-autoloader

# Set the ownership and permissions of the project files
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expose the port
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]
