FROM php:8.0-fpm-buster

# Use the default production configuration
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/bin/

RUN apt-get update && apt-get -y install bash git autoconf libmagickwand-dev libmagickcore-dev cron build-essential

RUN cd /tmp && \
    git clone https://github.com/Imagick/imagick && \
    cd imagick && \
    phpize && ./configure && \
    make && \
    make install

RUN install-php-extensions exif ffi gd gettext imap intl pcntl pdo_mysql redis gmp zip opcache xml xdebug

# install composer
RUN curl -sS https://getcomposer.org/installer | php -- \
    --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/laravel
