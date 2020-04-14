FROM php:7.3-apache
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
		unzip \
		less \
		nano \
		cron \
        libzip-dev \
    && docker-php-ext-configure zip \
    && docker-php-ext-install -j $(nproc) zip\
    && docker-php-ext-configure pdo_mysql \
    && docker-php-ext-install -j $(nproc) pdo_mysql
	
# Use the default production configuration
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# IonCube Loader
ADD https://downloads.ioncube.com/loader_downloads/ioncube_loaders_lin_x86-64.tar.gz /tmp/
RUN tar -xzvf /tmp/ioncube_loaders_lin_x86-64.tar.gz -C /usr/local/lib/php/extensions/no-debug-non-zts-20180731/ ioncube/ioncube_loader_lin_7.3.so --strip-components=1
RUN printf "zend_extension = /usr/local/lib/php/extensions/no-debug-non-zts-20180731/ioncube_loader_lin_7.3.so" > /usr/local/etc/php/conf.d/ioncube.ini
RUN chmod 644 /usr/local/etc/php/conf.d/ioncube.ini 

# Watch My Domains SED	
ADD https://domainpunch.com/sed/wmdsed40_trial.zip.php /tmp/
RUN unzip /tmp/wmdsed40_trial.zip.php -d /tmp/
RUN mv /tmp/wmdsed40/* /var/www/html/
RUN chmod a+w /var/www/html/logs
COPY ./config.php /var/www/html/

# Setup cron
RUN printf "* * * * * root /usr/local/bin/php /var/www/html/cron.php 2>&1\n# valid\n" > /etc/cron.d/wmdsed
RUN chmod 0644 /etc/cron.d/wmdsed

# Entrypoint script
RUN printf "#!/bin/bash\n/etc/init.d/cron start\napache2-foreground\n" > /entrypoint.sh
RUN chmod a+x /entrypoint.sh

ENTRYPOINT ["/entrypoint.sh"]
