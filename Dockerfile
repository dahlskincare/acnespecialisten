FROM php:8.0-apache
RUN docker-php-ext-install mysqli
RUN apt-get update 
RUN apt-get install -y nodejs npm
RUN npm install -g n
RUN n 14
RUN a2enmod rewrite
RUN service apache2 restart
RUN apt install git -y
RUN apt install zip -y
RUN apt install uuid-dev -y

RUN pecl install uuid && docker-php-ext-enable uuid    

COPY .ssh /.ssh

COPY . .

COPY .git .git
COPY .gitignore .gitignore
COPY .htaccess .htaccess

RUN git config --global --add safe.directory /var/www/html

RUN npm install -g typescript
RUN npm install -g sass
RUN npm install