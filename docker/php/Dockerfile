FROM php:7.4-fpm

# Download script to install PHP extensions and dependencies
ADD https://raw.githubusercontent.com/mlocati/docker-php-extension-installer/master/install-php-extensions /usr/local/bin/

RUN chmod uga+x /usr/local/bin/install-php-extensions && sync

RUN DEBIAN_FRONTEND=noninteractive apt-get update -q \
&& DEBIAN_FRONTEND=noninteractive apt-get install -qq -y \
curl \
git \
zip \
unzip \
&& install-php-extensions \
    pdo \
    pdo_mysql \
    mcrypt \
    mbstring \
    xml \
    openssl \
    json \
    phar \
    zip \
    dom \
    session \
    zlib

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

