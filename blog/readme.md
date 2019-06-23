#Database
dans le fichier .env vous trouvez le nom de base de donnée project, utilisateur:admin, mot de passe:Passw0rd.

#Register 
j'ai utilisé l'auth de laravel, grace au cmd php artisan make:auth

#updatepassword
j'ai utilisé mailtrap laravel.
dans le fichier .env

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=19111584a77a30
MAIL_PASSWORD=XXXXXXXXXXXXXX
MAIL_ENCRYPTION=null

j'ai crée un compte avec ma boite gmail dans le site : vous pouvez le creer aussi pour tester.

https://mailtrap.io/

par la suite j'ai mets ceci :

MAIL_USERNAME=19111584a77a30
MAIL_PASSWORD=XXXXXXXXXXXXXX


j'ai modifier aussi url dans le fichier .env
PP_URL=http://localhost:8000

et ça fonctionne.


#items

d'aprés l'authentification j'affiche la liste des items format table avac pagination, et j'ai modifié la redirection dans
blog\app\Http\Controllers\Auth(LoginController.php) 'protected $redirectTo = 'items''

#Additems

j'ai crée une vue dans dossier items(createitems.blade.php) et aussi un controller(ItemsController.php) et j'ai fais migrationn pour l'ajout d'un items.
concernant l'image j'insert path dans la table et image physique(blog\storage\app\image)


#Aduserfromcommandline

j'ai crée  un command a l'aide de la command php artisan make:command CreateUsers

j'ai changé la signature par 'users:create', la description par 'Create a new user' dans la function handle()

j'ai ajouté un bout de code pour la demande des informations,j'ai importé model user dans se fichier pour la creation d'un nouveau utilisateur et aussi

le sauvgardé  et afficher un message

par la suite aller dans cmd et ecrire php atisan users:create

#seedfakedata

j'ai crée un model Item  grace au cmd php artisan make:model Item , aprés j'ai cru une factories a l'aide de la cmd 
php artisan make:factory ItemsFactory --model=Item
  
j'ai importé le model item par la suite crée deux lignes ou ça veut dire deux colonnes title  description est qu'est ce qu'il va ce générer avec.
aprés j'ai crée un seeds(blog\database\seeds(ItemsTableSeeder)) j'ai ajouté le model et aussi le nombre que je veux générer

par la suite utilser cmd php artisan tinker	

#unittests

j'ai fais un unittest cases, donc j'ai instalé php unit grace au cmd sudo apt-get install phpunit,puis j'ai crée une page test(blog\tests\Unit(
php artisan make:ItemsTest --unit)) avec un code.
on peut le generer grace a ./vendor/bin/phpunit



les futures taches a crées:
1 change a user password from the command line
2 I should be able to seed fake data (100 users) from the command line

les futures taches a développé:
1 validation des inputs(add a new user from the command line)
2 List all items 


 
