FROM mcr.microsoft.com/devcontainers/php:8.2

# Instalamos las extensiones necesarias
RUN apt-get update && \
    apt-get install -y php8.2-mysql && \
    docker-php-ext-install pdo pdo_mysql
