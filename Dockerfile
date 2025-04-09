FROM php:8.1-apache

# Cài mysqli
RUN docker-php-ext-install mysqli

# Copy code vào container
COPY src/ /var/www/html/

# Bật mod_rewrite (nếu dùng sau này)
RUN a2enmod rewrite
