# Dockerfile for PHP Racing Game Board Project
FROM php:7.4-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install \
    zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Create build directory for logs if it doesn't exist
RUN mkdir -p build/logs

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html

# Default command
CMD ["php", "-v"]