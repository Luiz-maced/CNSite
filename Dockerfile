# ============================================
# Base PHP Image (8.2 FPM)
# ============================================
FROM php:8.2-fpm

# ============================================
# System Dependencies
# ============================================
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    unzip \
    git \
    curl \
    libonig-dev \
    libzip-dev \
    && rm -rf /var/lib/apt/lists/*

# ============================================
# PHP Extensions
# ============================================
RUN docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install gd

# ============================================
# Composer (copied from official image)
# ============================================
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# ============================================
# App Directory
# ============================================
WORKDIR /app

# ============================================
# Copy Application Files
# ============================================
COPY . .

# ============================================
# Install PHP Dependencies
# ============================================
RUN composer install --no-dev --optimize-autoloader

# ============================================
# Create storage folders and fix permissions
# ============================================
RUN mkdir -p /app/storage/framework/cache/data && \
    mkdir -p /app/storage/framework/sessions && \
    mkdir -p /app/storage/framework/views && \
    mkdir -p /app/storage/logs && \
    chmod -R 777 /app/storage

# ============================================
# Expose port and start Laravel
# ============================================
EXPOSE 8000

CMD php artisan serve --host 0.0.0.0 --port 8000
