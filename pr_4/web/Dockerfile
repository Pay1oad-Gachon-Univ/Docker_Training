FROM php:8.1-apache

# PHP 확장 설치 (mysqli → mysql 연동용)
RUN docker-php-ext-install mysqli

# index.php 복사
COPY index.php /var/www/html/
