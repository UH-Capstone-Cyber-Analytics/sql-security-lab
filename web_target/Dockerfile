# web_target/Dockerfile

# Use the official PHP-Apache image
FROM php:7.4-apache

# Install the MySQL extension (mysqli)
RUN docker-php-ext-install mysqli

# Copy our web files into the default Apache document root
COPY index.php /var/www/html/

# Expose port 80 (optional)
EXPOSE 80

