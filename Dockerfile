# Gunakan base image PHP 8.3-FPM
FROM php:8.3-fpm-alpine

# Set direktori kerja
WORKDIR /var/www

# Instal dependensi sistem (termasuk untuk ekstensi 'zip' dan build 'npm')
RUN apk update && apk add \
    git \
    curl \
    libzip-dev \
    zip \
    unzip \
    mysql-client \
    nodejs \
    npm

# Instal ekstensi PHP (Perbaikan 1: 'zip' bukan 'libzip')
RUN docker-php-ext-install pdo_mysql bcmath zip

# Instal Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy file composer
COPY composer.json composer.lock ./

# Install dependensi PHP (Perbaikan 2: '--no-scripts')
RUN composer install --no-dev --optimize-autoloader --no-scripts

# Copy file package.json
COPY package.json package-lock.json ./

# Install dependensi Node (Perbaikan 3: HANYA install, JANGAN build)
RUN npm install

# Copy sisa kode aplikasi (SEKARANG 'vite.config.js' sudah ada)
COPY . .

# Build aset frontend (Perbaikan 3: 'build' dijalankan SETELAH copy)
RUN npm run build

# Jalankan script Composer (Perbaikan 2: Dijalankan SETELAH copy)
RUN composer run-script post-autoload-dump --no-dev

# Ubah kepemilikan file
RUN chown -R www-data:www-data /var/www

# Ganti user
USER www-data

# Expose port
EXPOSE 9000

# Perintah default
CMD ["php-fpm"]
