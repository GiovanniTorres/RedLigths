FROM php:8.2-apache

# Instala extensiones necesarias
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    default-mysql-client \
    unzip \
    zip \
    libssl-dev \
    && docker-php-ext-install pdo pdo_mysql

# Habilita mod_rewrite (por si después usas URLs limpias)
RUN a2enmod rewrite
