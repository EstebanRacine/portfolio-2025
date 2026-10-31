FROM php:8.2-apache
RUN a2enmod rewrite headers
RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

# PHPMailer installé hors du webroot (le volume monté sur /var/www/html ne le masque pas)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
RUN apt-get update && apt-get install -y --no-install-recommends unzip \
    && rm -rf /var/lib/apt/lists/* \
    && mkdir -p /opt/composer \
    && composer require --working-dir=/opt/composer --no-interaction phpmailer/phpmailer:^6.9
