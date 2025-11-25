FROM php:8.2-apache

# Copy project files into Apache folder
COPY . /var/www/html/

# Enable Apache mod_rewrite (important for PHP projects)
RUN a2enmod rewrite
