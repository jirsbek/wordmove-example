FROM wordpress:php7.0
RUN docker-php-ext-install pdo_mysql
RUN a2enmod rewrite headers
