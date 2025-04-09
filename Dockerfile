FROM php:8.1-apache

# Cài extension PostgreSQL
RUN apt-get update && \
    apt-get install -y libpq-dev && \
    docker-php-ext-install pgsql pdo_pgsql

# Copy source vào container
COPY src/ /var/www/html/

# Bật mod_rewrite (tuỳ chọn)
RUN a2enmod rewrite
