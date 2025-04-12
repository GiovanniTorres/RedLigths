# Usa una imagen base de PHP 8.2 con Apache
FROM mcr.microsoft.com/devcontainers/php:8.2

# Instala extensiones necesarias
RUN apt-get update && \
    apt-get install -y libpng-dev libonig-dev libxml2-dev libssl-dev \
    && docker-php-ext-install pdo pdo_mysql

# Verifica que pdo_mysql está instalado
RUN php -m | grep pdo_mysql || echo "pdo_mysql no se instaló"
