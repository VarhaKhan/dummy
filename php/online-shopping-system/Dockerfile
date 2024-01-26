FROM php:7.3.3-apache

# Update package lists and install required dependencies
RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libzip-dev \
        && \
    docker-php-ext-install -j$(nproc) mysqli gd zip

# Expose port 80
EXPOSE 80
