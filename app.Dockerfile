# syntax=docker/dockerfile:1.4
FROM node:18-bullseye-slim AS builder
RUN --mount=type=cache,target=/var/cache/apt,sharing=locked --mount=type=cache,target=/var/lib/apt,sharing=locked \
    apt-get update && \
    apt-get dist-upgrade -y

WORKDIR /app

COPY --link ./src/package.json ./src/package-lock.json /app/
RUN --mount=type=cache,target=/root/.npm \
    npm ci && \
    mkdir /app/public
COPY --link ./src/resources /app/resources
COPY --link ./src/vite.config.js /app/
RUN npm run build


FROM php:8.1-fpm

ENV TZ Asia/Tokyo

WORKDIR /app

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y git unzip libzip-dev libicu-dev libonig-dev iputils-ping net-tools && \
    docker-php-ext-install intl pdo_mysql zip bcmath && \
    git clone https://github.com/phpredis/phpredis.git /usr/src/php/ext/redis && \
    docker-php-ext-install redis

COPY --link ./php.ini /usr/local/etc/php/php.ini
COPY --link --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY --link ./src/ /app/
RUN composer install && \
    chmod -R 777 /app/storage && \
    composer global require "laravel/installer"

COPY --link --from=builder /app/public/build /app/public/build

# Install Xdebug
RUN pecl install xdebug && docker-php-ext-enable xdebug

# Enable Xdebug
ENV XDEBUG_MODE=debug
ENV XDEBUG_CLIENT_HOST=host.docker.internal
