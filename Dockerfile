FROM php:7.4-fpm-alpine

RUN sed -i 's/;security\.limit_extensions.*/security.limit_extensions = .php .png/g' /usr/local/etc/php-fpm.d/www.conf
COPY --chown=www-data:www-data index.php /srv/
COPY --chown=www-data:www-data assets /srv/assets

WORKDIR /srv
