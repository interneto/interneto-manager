# Interneto manager

## Description
Interneto manager is a bookmark manager to store and save links of the internet.

The purpose is to permit the user to make a database of related links with information of saved links. You should be able to export your database and view local or use it online in a remote server.

Classify links is the best way to organize the information and make your own innernet. You can make your own databse with folders, tags, and rate of your links. Also you can search links via the type of content.

*Pass from the Internet to your own InnerNet.*

**Information** is just the **in**side **formation** with external data to create valuable knowledge.


This is a project in Laravel a framework of PHP that uses the architectural pattern *Model-View-Controller*

### Initialize project in Laravel

1.1. Create a new Laravel application, configure your database, and run your database migrations
`composer create-project laravel/laravel interneto-project`

- Install Laravel Breeze using Composer: `composer require laravel/breeze --dev`
```sh
php artisan breeze:install # also with vue / react 
php artisan migrate
npm install
npm run dev
```

1.2. Cloning the repository `git clone https://github.com/internet0/interneto-manager`
- Install vendor and the dependencies with `composer install`
- Copy the environment example .env.example to .env (`cp .env.example .env`) and edit the configuration of the .env file with the same configuration as docker:
```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=postgres
DB_USERNAME=postgres
DB_PASSWORD=postgres
```
- Uncomment the the lines to use postgres (`extension=pdo_pgsql` `extension=pgsql`) of php.ini in php folder to use that database management system

2. Now you need to create the database to store the data, you can use:
- A container with docker. Make `docker compose up -d` to the file docker.compose.yml
- A virtual machine with a server like CentOS, Ubuntu Server, etc
- LAMPP (Apache, MySQL, PHPMyAdmin and PHP)
- XAMPP (Apache-server, MariaDB, PHP and Perl-programming)

3. After the project has been created, start Laravel's local development server using: `php artisan serve`

4. Once you have started the Artisan development server, your application will be accessible in your web browser at http://localhost:8000. 


### Development part

1. ~~Make Model Migration Factory Controller (mfc)~~: `php artisan make:model Web -mfc`
	1. ~~Create Model (app/models)~~: `php artisan make:model Web`
	2. ~~Create Migration  (database/migrations)~~: `php artisan make:migration create_web_table`
	3. ~~Create Factory (database/factories)~~: `php artisan make:factory WebFactory`
	4. Create Controller (app/http/controllers): `php artisan make:controller WebController`
    *order of edition: model, migration, factory, controller*

2. Seeder (database/seeders): is created by default. First you need to connect to the database and then:
```sh
php artisan make:seeder UserSeeder
php artisan migrate:fresh --seed # php artisan db:seed
```

3. Create View by placing a file with the `.blade.php` in your application's `resources/views`

4. Serve the web `php artisan serve`


## TODO
~~done~~
- [x] done

---

## Log-in credentials
user: admin
mail: admin@admin.com
password: 12345678

## tree

```sh
├── .vscode
	settings.json
├── app
	├── Console
	├──	Kernel.php
	├── Exceptions
	├──	Handler.php
	├── Http
		├── Controllers
			├── Auth
                ├──
			├── Controller.php
			├──	DirectoryController.php
			├──	TagController.php
			├──	TypeController.php
			├──	WebController.php
		├── Middleware
            ├──
		├── Requests
			├── Auth
                ├──
			├──	LoginRequest.php
		    Kernel.php
	├── Models
        ├──	Directory.php
        ├──	Tag.php
        ├──	Type.php
        ├──	User.php
        ├──	Web.php
    ├── Providers
        ├──	AppServiceProvider.php
        ├──	AuthServiceProvider.php
        ├──	BroadcastServiceProvider.php
        ├──	EventServiceProvider.php
        ├──	RouteServiceProvider.php
	├── View
		├── Components
		├──	AppLayout.php
		├──	GuestLayout.php
├── bootstrap
	├── cache
	├── app.php
├── config
	├── app.php
	├── auth.php
	├── broadcasting.php
	├── cache.php
	├── cors.php
	├── database.php
	├── filesystems.php
	├── hashing.php
	├── logging.php
	├── mail.php
	├── queue.php
	├── sanctum.php
	├── services.php
	├── session.php
	└── view.php
├── database
	├── db-diagram
	├── factories
        ├──	DirectoryFactory.php
        ├──	TagFactory.php
        ├──	TypeFactory.php
        ├──	UserFactory.php
        ├──	WebFactory.php
	├── migrations
        ├── 2022_10_12_142400_create_users_table.php
        ├── 2022_10_12_142400_create_password_resets_table.php
        ├── 2022_10_12_142400_create_failed_jobs_table.php
        ├── 2022_10_12_142400_create_personal_acces_tokens_table.php
        ├── 2022_10_12_142400_create_directories_table.php    
        ├── 2022_10_12_142400_create_webs_table.php
        ├── 2022_10_12_142400_create_tags_table.php
        ├── 2022_10_12_142400_create_types_table.php
        ├── 2022_10_12_142400_create_webs_tags_table.php
	├── seeders
        ├── DatabaseSeeder.php
├── lang
	├──en
        ├──	auth.php
        ├──	pagination.php
        ├──	passwords.php
        ├──	validation.php
├── node_modules
├── public
	├── build
		├── assets
    ├── favicon.ico
    ├── index.php
	├──	manifest.json
    ├──	robots.txt
├── resources
    ├── assets
        ├──	interneto-logo
    ├── css
        ├── app.css
    ├── js
        ├── app.js
    ├── views
    	├── auth
		├── components
		├── layouts
        ├── welcome.blade.php
├── routes
    ├── api.php
    ├── auth.php
    ├── channels.php
    ├── console.php
    ├── web.php
├── storage
    ├── app
    ├── framework
    ├── logs
├── tests
    ├── Feature
        ├── Auth
        ├── ExampleTest.php
    ├── Unit
        ├── ExampleTest.php
    ├── CreatesApplication.php
    ├── TestCase.php
├── vendor
	├──...
├── .editorconfig
├── .env
├── .env.example
├── .gitattributes
├── .gitignore
├── artisan
├── composer.json
├── composer.lock
├── docker-compose.yml
├── package-lock.json
├── package.json
├── phpunit.xml
├── pstcss.config.js
├── README.md
├── tailwind.config.js
├── vite.config.js
```
