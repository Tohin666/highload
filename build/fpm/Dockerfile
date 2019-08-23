FROM php:7.2-fpm

ENV DEBIAN_FRONTEND=noninteractive \
    TERM=xterm

RUN apt-get update && \
    apt-get install -y libpq-dev git zlib1g-dev libicu-dev gcc  wget libxml2-dev libpng-dev && \
    docker-php-ext-install pdo pdo_mysql zip intl soap gd bcmath opcache && \
    pecl install xdebug && \
    docker-php-ext-enable xdebug gd bcmath opcache

# composer
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
RUN chmod +x /usr/local/bin/composer

# timezone
ENV TZ=Etc/UTC
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

COPY php.ini /usr/local/etc/php/