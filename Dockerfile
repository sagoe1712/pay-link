FROM php:8.1-cli

# ----------
# Install Composer
# ----------
COPY --from=composer/composer:latest-bin /composer /usr/bin/composer

# ----------
# Debugger
# ----------
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

WORKDIR /usr/src/myapp

COPY . .

CMD [ "php", "./index.php" ]
