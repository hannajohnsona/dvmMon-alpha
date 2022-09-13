# DVM - Mon
# A web monitor for dvmhost
# Debian set up
sudo apt install apache2<br />
sudo add-apt-repository ppa:ondrej/PHP <br />
sudo apt update<br />
sudo apt-get install php8.1-cli
php8.1-common php8.1-curl php8.1-gd php8.1-gmp php8.1-intl php8.1-mbstring php8.1-mysql php8.1-opcache php8.1-readline php8.1-sqlite3 php8.1-xml php8.1-zip
# Instructions for dvmMon
sudo git clone https://github.com/firealarmss/dvmMon.git<br />
(if apache) sudo mkdir /var/www/html/dvmMon<br />
Place all this in a folder on your web server if using apache2, /var/www/html/dvmMon<br/>
Open config.json.sample and read it and set those to what you want it to be and save it as config.json<br />
Open idAlias.json.sample to set radio id alias and tg id alias then save it as idAlias.json
# This is a very very very beta thing
