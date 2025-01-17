FROM php:8.0-fpm

RUN apt-get update && apt-get install -y \
    libonig-dev \
    libzip-dev \
    libpng-dev \
    libmcrypt-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libicu-dev \
    unzip \
    bash \
    git \
    nano \
    lsb-release

RUN docker-php-ext-configure gd --with-freetype --with-jpeg

RUN docker-php-ext-configure intl && \
    docker-php-ext-install \
    mysqli \
    pdo \
    pdo_mysql \
    gettext \
    zip \
    mbstring \
    intl \
    gd \
    bcmath

RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"
COPY ./php/uploads.ini "$PHP_INI_DIR/conf.d/uploads.ini"

WORKDIR /var/www/html

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN apt-get purge
RUN echo "alias ll='ls -la'" >> ~/.bashrc

ARG LOCAL_LINUX_USER
ARG LOCAL_LINUX_USER_UID

RUN useradd -m ${LOCAL_LINUX_USER} --uid=${LOCAL_LINUX_USER_UID}

USER ${LOCAL_LINUX_USER}

RUN cd ~ && git clone https://github.com/modmore/Gitify.git Gitify && cd Gitify && composer install

RUN echo "alias ll='ls -la'" >> ~/.bashrc && \
    echo "alias gitify='~/Gitify/bin/gitify'" >> ~/.bashrc