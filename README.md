# DVM - Mon
# A web monitor for dvmhost
# Debian set up
sudo apt apt upgrade<br />
sudo apt apt update<br />
sudo apt install apache2<br />
For future updates do at your own risk!!!{<br />
(For Ubunto Only)<br />
sudo add-apt-repository ppa:ondrej/php <br />
(End Ubunto Only)<br />
(For Raspian Only)<br />
sudo wget -qO /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg<br />
echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | sudo tee /etc/apt/sources.list.d/php.list<br />
sudo apt-get install php8.1-cli
php8.1-common php8.1-curl php8.1-gd php8.1-gmp php8.1-intl php8.1-mbstring php8.1-mysql php8.1-opcache php8.1-readline php8.1-sqlite3 php8.1-xml php8.1-zip libapache2-mod-php8.1
(End Raspbain Only)}<br />
End Future use install<br />
To just get working install<br />
sudo apt install php-common libapache2-mod-php
sudo apt update<br />
# Instructions for dvmMon
sudo git clone https://github.com/firealarmss/dvmMon.git<br />
(if apache) sudo mkdir /var/www/html/dvmMon<br />
Place all this in a folder on your web server if using apache2, /var/www/html/dvmMon<br/>
Open config.json.sample and read it and set those to what you want it to be and save it as config.json<br />
Open idAlias.json.sample to set radio id alias and tg id alias then save it as idAlias.json
# This is a very very very beta thing
