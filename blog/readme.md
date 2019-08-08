#Laravel/VueJs coding challenge
__________________________________________

###Installation

Install all the dependencies using composer
Composer global require laravel/installer

Copy the example env file and make the required configuration changes in the .env file
```
cp .env.example .env
```
Run the database migrations (Set the database connection in .env before migrating)
```
php artisan migrate
```

Start the local development server
```
php artisan serve
```
You can now access the server at http://localhost:8000

You need to create account in https://mailtrap.io/ using your gmail for sending an email
after create account, you need to copy credentials username and password and put them in the .env in MAIL_USERNAME,MAIL_PASSWORD

######Add user from command line
just follow steps and the user will be created		
```
php atisan users:create
```
######Database seeding
will be create 1000 items and 10 users
```
php artisan db:seed
```
**Note**:It's recommended to have a clean database before seeding. You can refresh your migrations at any point to clean the database by running the following command
```
php artisan migrate:refresh
```
######unittests
install for linux:sudo apt-get install phpunit 
'''
./vendor/bin/phpunit --filter testcreateuser

'''
..* `Service` - Folder service,contains item file for create the items and users file for create users from command line and interface.Each file contains method of creation.
..* `App\Console\Commands\CreateUser` -
..* `App\Http\Requests`
..* `App\Http\controlles`
..* `App\resources\js\components\ListeComponent`
..* `App\resources\js\app.js`
..* `App\resources\views\items`
..* `database\factories`
..* `database\seeds`
..* `tests\Feature`
