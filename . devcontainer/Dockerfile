FROM mcr.microsoft.com/devcontainers/php:8.2

# Instala dependencias para pdo_mysql
RUN apt-get update && \
    apt-get install -y php8.2-mysql && \
    docker-php-ext-install pdo_mysql
