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
- Copy the example .env.example to .env: `cp .env.example .env`

2. After the project has been created, start Laravel's local development server using the Laravel's Artisan CLI serve command: `php artisan serve`

3. Once you have started the Artisan development server, your application will be accessible in your web browser at http://localhost:8000. 

4. To execute the server install Postgres as a relational database management system. Change the values in the environment configuration file (.env)

5. Generate a container in docker with `docker compose up` to the file docker.compose.yml


### Development part

1. ~~Make Model Factory Controller (mfc)~~:  `php artisan make:Web -mfc`
	1. Create Model (app/models): `php artisan make:model Model-name`
	2. ~~Create Migration  (database/migrations)~~: `php artisan make:migration create_product_tag_table`
	3. Create Factory (database/factories): `php artisan make:factory Category`
	4. Create Controller (app/http/controllers): `App\Http\Controllers\Controller`
	*first edit the model, then the controller, migration and factory*

2. Create View by placing a file with the `.blade.php` in your application's `resources/views`

3. Serve the web `php artisan serve`



## TODO
~~done~~
- [x] Put same name as the primary key of the pivot table
- [x] Change Types to 1:n
- [ ] `php artisan make:migration create_tab_web`


---

## Log-in credentials
user: admin
mail: admin@admin.com
password: 12345678

---

├── = ├ ─ ─

## tree
```sh
├── .vscode
	settings.json
├── app
	├── Console
		Kernel.php
	├── Exceptions
		Handler.php
	├── Http
		├── Controllers
			├── Auth
			    Controller.php
				DirectoryController.php
				TagController.php
				TypeController.php
				WebController.php
				WebTagController.php
		├── Middleware
		├── Requests
			├── Auth
				LoginRequest.php
		    Kernel.php
	├── Models
		Directory.php
		Tag.php
		Type.php
		User.php
		Web.php
		WebTag.php
	├── Providers
		AppServiceProvider.php
		AuthServiceProvider.php
		BroadcastServiceProvider.php
		EventServiceProvider.php
		RouteServiceProvider.php
	├── View
		├── Components
			AppLayout.php
			GuestLayout.php
├── bootstrap
	├── cache
	app.php
├── config
	app.php
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
		DirectoryFactory.php
		TagFactory.php
		TypeFactory.php
		UserFactory.php
		WebFactory.php
		WebTagFactory.php
	├── migrations
	├── seeders
├── lang
	├──en
		auth.php
		pagination.php
		passwords.php
		validation.php
├── node_modules
├── public
	├── build
		├── assets
		manifest.json
	favicon.ico
	index.php
	robots.txt
├── resources
	├── assets
	├── css
	├── js
	├── views
		├── auth
		├── components
		├── layouts
├── routes
	api.php
	auth.php
	channels.php
	console.php
	web.php
├── storage
	├── app
	├── framework
	├── logs
├──tests
	├── Feature
		├── Auth
	├── Unit
		CreateApplication.php
		TestCase.php
├── vendor
	├──...
.editorconfig
.env
.env.example
.gitattributes
.gitignore
artisan
composer.json
composer.lock
docker-compose.yml
package-lock.json
package.json
phpunit.xml
pstcss.config.js
README.md
tailwind.config.js
vite.config.js
```