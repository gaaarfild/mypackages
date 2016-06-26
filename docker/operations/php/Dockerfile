FROM php:7.0-fpm

ADD ./symfony.ini /usr/local/etc/php/conf.d

RUN apt-get update && apt-get install -y \
    libpq-dev \
    libmemcached-dev \
    curl \
    git \
    vim \
    unzip


# Install xDebug
RUN pecl install xdebug \
    && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > $PHP_INI_DIR/conf.d/xdebug.ini \
    && echo "xdebug.remote_enable=on" >> $PHP_INI_DIR/conf.d/xdebug.ini \
    && echo "xdebug.remote_autostart=on" >> $PHP_INI_DIR/conf.d/xdebug.ini \
    && echo "xdebug.remote_connect_back=on" >> $PHP_INI_DIR/conf.d/xdebug.ini

# Install composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && php -r "unlink('composer-setup.php');"

# Install blackfire probe
RUN version=$(php -r "echo PHP_MAJOR_VERSION.PHP_MINOR_VERSION;") \
     && curl -A "Docker" -o /tmp/blackfire-probe.tar.gz -D - -L -s https://blackfire.io/api/v1/releases/probe/php/linux/amd64/$version \
     && tar zxpf /tmp/blackfire-probe.tar.gz -C /tmp \
     && mv /tmp/blackfire-*.so $(php -r "echo ini_get('extension_dir');")/blackfire.so \
     && echo "extension=blackfire.so" > $PHP_INI_DIR/conf.d/blackfire.ini \
     && echo "blackfire.agent_socket=tcp://blackfire:8707" >> $PHP_INI_DIR/conf.d/blackfire.ini

RUN usermod -u 1000 www-data

EXPOSE 9000
