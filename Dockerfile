# https://docs.npmjs.com/docker-and-private-modules
FROM node:18

ENV APP_HOME="/app"

WORKDIR ${APP_HOME}

COPY package*.json ${APP_HOME}/

RUN --mount=type=secret,id=npmrc,target=/root/.npmrc npm install

COPY . ${APP_HOME}/

# Use the official PHP image
FROM php:8.1.7-apache

# Install dependencies
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    && rm -rf /var/lib/apt/lists/*

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy the Laravel application code to the container
COPY . /var/www/html

# Set the working directory
WORKDIR /var/www/html

# Install PHP dependencies
# RUN composer install --no-interaction --optimize-autoloader

# Set up permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose the port
EXPOSE 80
