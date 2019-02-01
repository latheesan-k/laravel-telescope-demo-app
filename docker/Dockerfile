FROM alpine:3.8
MAINTAINER Latheesan Kanesamoorthy <latheesan-k@hotmail.com>

RUN apk add \
        --no-cache \
        --update \
        apache2 \
        composer \
        nano \
        bash \
        curl \
        php7 \
        php7-apache2 \
        php7-curl \
        php7-dom \
        php7-mbstring \
        php7-pdo_mysql \
        php7-pdo_sqlite \
        php7-session \
        php7-sockets \
        php7-tokenizer \
        php7-xml \
        php7-xmlwriter \
        php7-fileinfo \
    && mkdir -p /run/apache2 \
    && ln -sf /dev/stdout /var/log/apache2/access.log \
    && ln -sf /dev/stderr /var/log/apache2/error.log

WORKDIR /app

COPY ./laravel/composer.* ./
RUN composer install -n --no-autoloader --no-scripts --no-progress --no-suggest

COPY ./docker/*.conf /etc/apache2/conf.d/
COPY ./docker/php.ini /etc/php7/conf.d/99_custom.ini

COPY ./docker/web.sh /run/laravel-telescope-demo-app-web.sh
RUN chmod 755 /run/laravel-telescope-demo-app-web.sh

COPY laravel .
RUN composer dump-autoload -o -n

RUN chown -R apache:apache /app

EXPOSE 80
