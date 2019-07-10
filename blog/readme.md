#Install all the dependencies using composer
Composer global require laravel/installer

#Create the project 
composer create-project --prefer-dist laravel/laravel blog

#In file .env put your 
DB_USERNAME=......
DB_PASSWORD=......

#Then do in cmd
php artisan migrate

#You need to create account in https://mailtrap.io/ using your gmail for sending an email
#in the file .env put your details
MAIL_USERNAME=19111584a77a30
MAIL_PASSWORD=XXXXXXXXXXXXXX

#Aduserfromcommandline
php atisan users:create

#seedfakedata
php artisan tinker
factory('App\Item',1000)->create();
 
#unittests
#nstall for unix 
sudo apt-get install phpunit
./vendor/bin/phpunit

