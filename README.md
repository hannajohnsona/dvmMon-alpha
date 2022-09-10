# DVM - Mon
# A web monitor for dvmhost
# Instructions for dvmMon
(if apache) sudo mkdir /var/www/html/dvmMon<br />
Place all this in a folder on your web server if using apache2, /var/www/html/dvmMon<br/>
Open config.json and read it and set those to what you want it to be
# Debian set up
sudo apt install apache2<br />
sudo add-apt-repository ppa:ondrej/PHP <br />
sudo apt update<br />
sudo apt-get install php8.1-cli
php8.1-common php8.1-curl php8.1-gd php8.1-gmp php8.1-intl php8.1-mbstring php8.1-mysql php8.1-opcache php8.1-readline php8.1-sqlite3 php8.1-xml php8.1-zip
# This is a very very very beta thing
