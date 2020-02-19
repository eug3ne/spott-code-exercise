FROM php:7.2.2-fpm

# Copy composer to container
COPY composer.json composer.lock /var/www/

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
RUN docker-php-ext-enable xdebug

# Install extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN docker-php-ext-enable pdo_mysql

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install composer globaly to your php service
ENV COMPOSER_HOME /composer
ENV PATH ./vendor/bin:/composer/vendor/bin:$PATH
ENV COMPOSER_ALLOW_SUPERUSER 1
RUN curl -s https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin/ --filename=composer

# Set the working directory in the container to /var/www
WORKDIR /var/www

# Add user for laravel application with UID=1000
RUN usermod -u 1000 www-data

# Copy existing application directory contents
COPY . /var/www

# Copy existing application directory permissions
COPY --chown=www-data:www-data . /var/www

# Change current user to www
USER www-data

CMD php artisan serve --host=0.0.0.0 --port=9000

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
