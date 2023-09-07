# Interneto manager

## Description
Interneto manager is a sel-hosted bookmark manager to store and save URI links from the internet. 

The purpose is to permit the user to make a database of related links with valuable information to generate a Personal Knowledge System.

You should be able to:
- Use locally (offline) or in a remote server (online). ✅
- Classify links with parent folders and tags. ✅
- Sort links by name, date and tags. ❌ NOT IMPLEMENTED
- Import / export database of links. ❌ NOT IMPLEMENTED

## Development project

This is project is made with **Laravel** a full-stack framework written in **PHP** that uses the architectural pattern *Model-View-Controller* and permit the creation of complete web apps (frontend + backend). 

The backend runs in two **Docker** containers: onw with **PostgreSQL** as DBMS (Database Management System) and another with **Adminer** as a tool for managing databases.

## Steps to build the app

Before creating the Laravel project, you need to install in your system:
	"docker, postgresql, php, composer, nodejs, npm"
- In Windows: `winget install Docker.DockerDesktop PostgreSQL.PostgreSQL ApacheFriends.Xampp.8.2 OpenJS.NodeJS` + [install composer](https://getcomposer.org/download/)
- In macOS: `brew install docker postgresql@13 php composer node`
- In Debian-based Linux: `sudo apt install docker postgresql php composer nodejs npm`
- In Arch-based Linux: `sudo pacman -S docker postgresql php composer nodejs npm && yay -S docker-compose`

Also I recommend using VSCode as a code editor with these extensions: [Docker](https://marketplace.visualstudio.com/items?itemName=ms-azuretools.vscode-docker) + [SQLTools](https://marketplace.visualstudio.com/items?itemName=mtxr.sqltools) + [SQLTools PostgreSQL](https://marketplace.visualstudio.com/items?itemName=mtxr.sqltools-driver-pg) + [PHP Intelliphense](https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client) + [Laravel Snippets](https://marketplace.visualstudio.com/items?itemName=onecentlin.laravel5-snippets) + [Laravel Extra Intellisense](https://marketplace.visualstudio.com/items?itemName=amiralizadeh9480.laravel-extra-intellisense)

- This project is made with Laravel Breeze, if you want to start from scratch follow [Laravel docs](https://laravel.com/docs/10.x/readme) and use:
```sh
composer create-project laravel/laravel interneto-project
composer require laravel/breeze --dev
php artisan breeze:install # selecting frontend library (blade, react, vue, api)
```

### 1. Clone repository
 If you want to clone the existing repository use git: 
```sh
git clone https://github.com/interneto/interneto-manager`
```

### 2. Backend (database and web server)
To configure the backend of the application you need:
- Database system: relational database SQL (PostgreSQL, MySQL, TSQL) or non-relational (MongoDb, Redis, Neo4j)
- Database manager tool (optional): Adminer, PHPMyAdmin, DBeaver
- Web server: Nginx, Apache, Caddy, LiteSpeed, XAMPP (X-platform, Apache, MySQL, PHP, PHPMyAdmin)

The backend can run on:
- OS-Level Virtualization with Containers (Docker, podman or LSCS)
- Virtual Machine
- Real machine

> We use **Docker containers** (PostgreSQL with Alpine Linux + Adminer) + Laravel internal dev server ("php artisan serve")

#### 2.1 Configure the connection
To use PostgreSQL we need to configure a few things:

- First copy the environment example [.env.example](.env.example) to a new [.env](.env)  (`cp .env.example .env`) and edit the configuration of .env file to use PostgreSQL:
```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=postgres
DB_USERNAME=postgres
DB_PASSWORD=postgres
```

- Go to php.ini (/etc/php/php.ini in UNIX-based or C:\xampp\php\php.ini in Windows) and uncomment these lines to use PostgreSQL:
> `php --ini` show php.ini path location
```
extension=pdo_pgsql
extension=pgsql
```

- In [config/database.php](config/database.php) live as default. It is not necessary to use database, username and password for internal database.
```
        'pgsql' => [
            'driver' => 'pgsql',
            //'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'search_path' => 'public',
            'sslmode' => 'prefer',
        ],
```

- Now we use a [docker-compose.yml](docker-compose.yml) file with the following configuration. To create two containers with: PostgreSQL + Alpine (a very lightway Linux distro) and Adminer.
```yml
version: '3.8'
services:
db:
	image: postgres:14.1-alpine
	restart: always
	environment:
		- POSTGRES_DB=postgres
		- POSTGRES_USER=postgres
		- POSTGRES_PASSWORD=postgres
	ports:
		- 5432:5432
	volumes:
		- db:/var/lib/postgresql/data
admin:
	image: adminer
	restart: always
	depends_on:
		- db
	ports:
		- 8080:8080
volumes:
	db:
		driver: local
```

- Then build the docker containers with the configured 'docker-compose.yml' file
```bash
# build docker container
docker-compose up -d

# or close docker container
docker-compose down
```

#### 2.2 Connect to the database
- Then install the SQL client in vscode, PostgreSQL for this case. [SQLtools PostgreSQL/Cockroach Driver](https://marketplace.visualstudio.com/items?itemName=mtxr.sqltools-driver-pg) + [SQLTools](https://marketplace.visualstudio.com/items?itemName=mtxr.sqltools) or [vscode-postgresql-client](hhttps://marketplace.visualstudio.com/items?itemName=cweijan.vscode-postgresql-client2).

- And connect to the SQL container database with credentials (host, username, password, port). If all goes well, you should be connected to the database.


### 3. Install dependencies
- Insall PHP vendor dependencies specified in [composer.json](composer.json), installed in [vendor](./vendor/)
```sh
composer install

# or update if it is needed
composer update
```

- Install Node.js dependencies specified in your [package.json](package.json)
```sh
npm install
```

### 4. Develop in laravel with "php artisan"
- If you want to set up the authentication scaffolding Laravel Breeze provides (routes, views, controllers) with different ecosystems (blade, react, vue, api). **Do not run this command** if you clone the repo **this overwrite data**.
```sh
# php artisan breeze:install
```

- Generate Application Key, to generate a unique application key for your project.
```sh
php artisan key:generate
```

- Run Database Migrations.
```sh
php artisan migrate
```

- Also you can seed database or seed manually.
```sh
# php artisan db:seed
```

### 5. Start Laravel local development
- Compile and bundle your frontend assets (such as JS, CSS, images) for development.
```sh
npm run dev
```

- To start Laravel local development use.
```sh
php artisan serve
```

- Once you have started the Artisan development server, your application will be accessible in your web browser at http://localhost:8000.

> To use the app you need firstly to register with (name, email, password)

---

### Build app locally after configure

Every time you want to build the app locally you have to up the Docker containers, compile and bundle your frontend assets and serve Laravel
```sh
docker compose up -d
npm run dev
php artisan serve
```

> npm runs in one shell serving the frontend and php artisan runs in another shell


---

### Other php commands

```sh
# Clear cache, clear config
php artisan cache:clear
php artisan config:clear

# Run seeders
php artisan db:seed

# Generate application key
php artisan key:generate

# Run migrations
php artisan migrate

# Create a controller, model, migration
php artisan make:controller MyController
php artisan make:model MyModel
php artisan make:migration create_table_name

# Create a seeder, middleware, Blade view, resourceful controller, factory, test
php artisan make:seeder MySeeder
php artisan make:middleware MyMiddleware
php artisan make:view myview
php artisan make:controller MyResourceController --resource
php artisan make:factory MyFactory
php artisan make:test MyTest

# Start the development server
php artisan serve
```
