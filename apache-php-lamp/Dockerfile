FROM debian:12


RUN apt update && apt install -y lsb-release apt-transport-https ca-certificates wget gnupg
RUN wget -q https://packages.sury.org/php/apt.gpg -O- | apt-key add -
RUN echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" > /etc/apt/sources.list.d/php.list
RUN apt update && apt install -y php8.1
# FIN DE CHATGPT

RUN apt install -y apache2 


# EXTENSIONES DE PHP
RUN apt install -y php8.1-curl php8.1-dom php8.1-fileinfo php8.1-gd php8.1-iconv php8.1-intl php8.1-mbstring php8.1-pdo php8.1-mysql php8.1-simplexml php8.1-zip

EXPOSE 80
EXPOSE 443


# MODULOS DE APACHE
# RUN a2enmod rewrite
RUN a2enmod ssl
RUN a2enmod rewrite
RUN update-ca-certificates


ENTRYPOINT [ "apache2ctl","-D","FOREGROUND" ]