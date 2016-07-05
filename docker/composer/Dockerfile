FROM php:7.0-fpm

RUN apt-get update && \
  DEBIAN_FRONTEND=noninteractive apt-get install -y \
  git \
  unzip \
  && rm -r /var/lib/apt/lists/*

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php -r "if (hash_file('SHA384', 'composer-setup.php') === 'bf16ac69bd8b807bc6e4499b28968ee87456e29a3894767b60c2d4dafa3d10d045ffef2aeb2e78827fa5f024fbe93ca2') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer
RUN rm -rf composer-setup.php

WORKDIR /var/www
ENTRYPOINT ["composer", "--ansi"]