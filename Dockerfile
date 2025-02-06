FROM php:8.1-cli

# Устанавливаем зависимости
RUN apt-get update && apt-get install -y \
    libpq-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_mysql gd

# Устанавливаем Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Копируем проект внутрь контейнера
WORKDIR /var/www

#CMD ["php", "-S", "0.0.0.0:80", "-t", "public"]
