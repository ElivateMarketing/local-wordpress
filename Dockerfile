FROM wordpress:latest

# Install Composer
RUN apt-get update && \
    apt-get install -y curl git unzip && \
    curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

# Set working directory
WORKDIR /var/www/html