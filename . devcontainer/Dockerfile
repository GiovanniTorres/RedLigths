FROM mcr.microsoft.com/devcontainers/php:8.2

RUN apt-get update && \
    apt-get install -y libpng-dev libonig-dev libxml2-dev zip unzip libzip-dev && \
    docker-php-ext-install pdo pdo_mysql
