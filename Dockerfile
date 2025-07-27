FROM php:8.2-cli

# Instalar extensiones (pdo_mysql, etc.)
RUN docker-php-ext-install pdo pdo_mysql

# Copiar **TODO el proyecto** al contenedor (no solo una carpeta app/)
COPY . /var/www/html

# Puerto expuesto
EXPOSE 8000

# Comando para el servidor PHP (se ejecuta desde /var/www/html)
CMD ["php", "-S", "0.0.0.0:8000", "-t", "/var/www/html"]