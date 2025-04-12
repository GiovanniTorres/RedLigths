FROM php:8.2-apache

# Instala dependencias necesarias para PDO MySQL
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    default-mysql-client \
    unzip \
    zip \
    libssl-dev \
    && docker-php-ext-install pdo pdo_mysql

# Habilita mod_rewrite (por si lo necesitas luego)
RUN a2enmod rewrite
