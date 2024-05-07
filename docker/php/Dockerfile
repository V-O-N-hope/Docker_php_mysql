FROM php

RUN docker-php-ext-install mysqli
RUN sed -i 's/;extension=mysqli/extension=mysqli/' /usr/local/etc/php/php.ini-development