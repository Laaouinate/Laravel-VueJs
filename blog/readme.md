# Install all the dependencies using composer #
```
Composer global require laravel/installer
```
# In file [.env](https://github.com/Laaouinate/Laravel-VueJs/blob/master/blog/.env) put your #

1. DB_USERNAME=......
2. DB_PASSWORD=......

# Then do in cmd :  #
```
php artisan migrate
```
# You need to create account in :[mailtrap](https://mailtrap.io/) using your gmail for sending an email #
## in the file  [.env](https://github.com/Laaouinate/Laravel-VueJs/blob/master/blog/.env) put your details ##

* MAIL_USERNAME=19111584a77a30
*  MAIL_PASSWORD=XXXXXXXXXXXXXX

# Aduserfromcommandline :  #
```
php atisan users:create
```
# seedfakedata : #
```
php artisan tinker
```
```
factory('App\Item',1000)->create();
```
 
# unittests #
## Install for unix ##
``` 
sudo apt-get install phpunit
```
### for the test ###
```
./vendor/bin/phpunit
```	
# for run the server  #
```
php artisan serve
```
