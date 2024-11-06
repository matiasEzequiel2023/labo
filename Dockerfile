# Usa una imagen PHP con Apache
FROM php:8.1-apache

# Copia todos los archivos de tu proyecto al servidor
COPY . /var/www/html/

# Instala las extensiones de MySQL para PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql
