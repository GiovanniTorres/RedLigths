FROM mcr.microsoft.com/devcontainers/php:8.2

RUN apt-get update && \
    apt-get install -y libpdo-mysql php-mysql && \
    docker-php-ext-install pdo pdo_mysql
