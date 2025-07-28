FROM php:7.4-apache
RUN docker-php-ext-install pdo pdo_mysql

COPY . /var/www/html/
EXPOSE 80
# Utilise l image officielle PHP avec Apache
FROM php:8.2-apache
# Copie le contenu de ./app dans le dossier Apache
COPY ./var/www/html/
# Expose le port 80 (qui sera mappe via docker-compose)




EXPOSE 80
