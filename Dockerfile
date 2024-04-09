# Als Basis Image php:7.2-apache eine PHP image mit eingebauten apache
FROM php:7.2-apache
# installieren von mysqli
RUN docker-php-ext-install mysqli
# Kopieren der Files . (aktuelles Verzeichnis) vom Host in den Container /var/www/html (apache htdoc)
COPY . /var/www/html
