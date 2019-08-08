# Laravel/VueJs coding challenge
__________________________________________

### Installation

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

### tool Vuejs

will install all modules listed as dependencies in package.json
```
npm install
```
infinite scroll plugin for Vue.js.
```
npm install vue-infinite-loading
```
The plugin for Vue.js provides services for making web requests and handle responses using a XMLHttpRequest or JSONP
```
npm install vue-resource
```
###### Add user from command line
just follow steps and the user will be created		
```
php atisan users:create
```
###### Database seeding
will be create 1000 items and 10 users
```
php artisan db:seed
```
**Note**:It's recommended to have a clean database before seeding. You can refresh your migrations at any point to clean the database by running the following command
```
php artisan migrate:refresh
```
###### unittests
install for linux:sudo apt-get install phpunit 
```
./vendor/bin/phpunit --filter testcreateuser
```
* `Service` - Folder service,contains item file for create the items and users file for create users from command line and interface.Each file contains method of creation.
* `App\Console\Commands\CreateUser` - In the file i make call the service and i use the method the creation.
* `App\Http\Requests` - inside i have created ItemReqest file and userRequest file for the validation
* `App\Http\controlles` - Inside i have created controllers. ItemController contains index function for display the items, create function for the view, store function for save the items with the service using method,
and i have called the the ItemRequest for validation.RegistrationController contains the userRequest for validation and called the service using method.
* `App\resources\js\components\ListeComponent` - Inside of template i have putted table with boucle for and button for load data,and in export default i have putted my code script.
* `App\resources\js\app.js` - I have imported my components list and components InfiniteLoading.
* `App\resources\js\app.js` - I have imported my components list and components ListeComponent.
* `App\resources\views\items` - I have created my views create item and for display may data also f registration user.
* `database\factories` - I have created ItemsFactory and i used them with the models for get data.
* `database\seeds` - have created ItemsTableSeeder and UsersTtableSeeder and inside i have used the models with the factory and the number of data.
* `tests\Feature` - I heave creation function inside for generate an user for the test.
* `routes\web` - I have putted all routes.
