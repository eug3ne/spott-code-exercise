FROM php:7.2.2-fpm

# Copy composer.json
COPY composer.json /var/www/

# Install the dependencies and extensions required by Laravel
RUN apt-get update && apt-get install -y \
    build-essential \
    mysql-client \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl

#Install Xdebug extension (!NOTICE deactivate this ext to Prod)
RUN pecl install xdebug

# Install extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN docker-php-ext-enable pdo_mysql

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Add user for laravel application with UID=1000
RUN usermod -u 1000 www-data

# Copy existing application directory contents
COPY . /var/www

# Set the working directory in the container to /var/www
WORKDIR /var/www

# Copy existing application directory permissions
COPY --chown=www-data:www-data . /var/www

# Execute composer and install vendors lib
RUN composer install --prefer-source --no-interaction
ENV PATH="~/.composer/vendor/bin:./vendor/bin:${PATH}"

# Copy composer.lock
COPY composer.lock  /var/www

# Change current user to www
USER www-data

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]