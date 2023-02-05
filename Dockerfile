# Use an official PHP image as the base image
FROM php:7.4-apache

# Copy the application code to the web server's root directory
COPY . /var/www/html/

# Set the working directory
WORKDIR /var/www/html

# Expose port 80 to the host machine
EXPOSE 80

# Start the Apache web server
CMD ["apache2-foreground"]