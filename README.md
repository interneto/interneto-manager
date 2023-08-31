# Interneto manager

## Description
Interneto manager is a bookmark manager to store and save links of the internet. The purpose is to permit the user to make a database of related links with information of saved links. You should be able to export your database and view local or use it online in a remote server. Classify links is the best way to organize the information and make your own innernet. You can make your own databse with folders, tags, and rate of your links. Also you can search links via the type of content.

**Information** is just the **in**side **formation** with external data to create valuable knowledge.

*Pass from the Internet to your the InnerNet*

## Development project

This is project is made with **Laravel** a full-stack framework written in **PHP** that uses the architectural pattern *Model-View-Controller*, that permit create complete web apps with frontend and backend. The frontend is using react library and the backend is in a **Docker** container with **PostgreSQL** as DBMS (Database Management System) and **Adminer** a tool for managing content in databases.

## Steps to build the app

Before creating Laravel project, you need to install in your system: "docker, postgresql, php, composer, nodejs, npm"
- In Windows: `winget install Docker.DockerDesktop PostgreSQL.PostgreSQL ApacheFriends.Xampp.8.2 OpenJS.NodeJS` + [install composer](https://getcomposer.org/download/)
- In macOS: `brew install docker postgresql@13 php composer node`
- In Debian-based Linux: `sudo apt install docker postgresql php composer nodejs npm`
- In Arch-based Linux: `sudo pacman -S docker postgresql php composer nodejs npm && yay -S docker-compose`

> I recommend use VSCode as a code editor to work with extensions: Docker + SQL

- This project is made with laravel and laravel breeze, if you want to start from scratch follow [laralvel docs](https://laravel.com/docs/10.x/readme) and use:
```sh
composer create-project laravel/laravel app-name && cd app-name
composer require laravel/breeze --dev
```

### 1. Clone repository
 If you want to clone the exisitng repository use git: `git clone https://github.com/interneto/interneto-manager`

### 2. Backend (database and web server)
To configure the backend of the application as a server, you have several options to consider:
- OS-Level Virtualization with Docker Containers:
    - Mysql Container: hosts the MySQL database server.
    - Adminer Container: web-based database management tool for interacting with and managing databases.
    - App Container (optional): 
       - Laravel internal dev server ("php artisan serve") for simpler setups
       - Dedicated web server for production scenarios like Nginx or Apache
- Local Web Server XAMPP (X Platform, Apache, MySQL, PHP, and PHPMyAdmin)
- Dedicated Web Server: Nginx, Apache HTTP Server, Caddy, LiteSpeed Web Server

> We use **Docker containers** with the Mysql + Adminer containers.

#### 2.1 Configure the connention
We use PostgreSQL so we need to configure a few things:

- First copy the environment example [.env.example](.env.example) to a new [.env](.env)  (`cp .env.example .env`) and edit the configuration of .env file to use MySQL:
```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=postgres
DB_USERNAME=postgres
DB_PASSWORD=postgres
```

- Go to php.ini (/etc/php/php.ini in UNIX-based or C:\xampp\php\php.ini in MS-DOS) and uncomment these lines to use MySQL:
> `php --ini` show php.ini path location
```
extension=pdo_pgsql
extension=pgsql
```

- Use the same config in [config/database.php](config/database.php)
```
        'pgsql' => [
            'driver' => 'pgsql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'postgres'),
            'username' => env('DB_USERNAME', 'postgres'),
            'password' => env('DB_PASSWORD', 'postgres'),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'search_path' => 'public',
            'sslmode' => 'prefer',
        ],
```


- Now we use a [docker-compose.yml](docker-compose.yml) with the follow configuration. To create two containers with: PostgreSQL + Alpine (a very lightway Linux distro) and Adminer.

- Then build the docker container with the configured 'docker-compose.yml' file
```bash
# build docker container
docker-compose up -d

# or close docker container
docker-compose down
```

- Then install a SQL client in vscode, PostgreSQL for this case.
  - [SQLtools PostgreSQL/Cockroach Driver](https://marketplace.visualstudio.com/items?itemName=mtxr.sqltools-driver-pg) + [SQLTools](https://marketplace.visualstudio.com/items?itemName=mtxr.sqltools)
  - Or [vscode-postgresql-client2](hhttps://marketplace.visualstudio.com/items?itemName=cweijan.vscode-postgresql-client2). 
- And connect to the SQL container database with credentials (host, username, password, port).

- If everything goes correct you should be connected to the database.

### 3. Install dependencies
- Insall PHP dependencies specified in [composer.json](composer.json), installed in [vendor](./vendor/)
```sh
composer install

# or update if it is needed
composer update
```

- Install Node.js dependencies specified in your [package.json](package.json)
```sh
npm install
```

- Compile and bundle your frontend assets (such as JavaScript, CSS, and images) for development
```sh
npm run dev
```

### 4. Develop in laravel with "php artisan"
- If you want to set up the authentication scaffolding Laravel Breeze provides (routes, views, controllers) with different ecosystems (blade, react, vue, api). **Do not run this command** if you clone the repo this overwrite data.
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

### 4. Start Laravel local development
- To start Laravel local development use.
```sh
php artisan serve
```

- Once you have started the Artisan development server, your application will be accessible in your web browser at http://localhost:8000.



--- 

### Other php commands

```sh
# Start the development server
php artisan serve

# Create a controller
php artisan make:controller MyController

# Create a model
php artisan make:model MyModel

# Create a migration
php artisan make:migration create_table_name

# Run migrations
php artisan migrate

# Create a seeder
php artisan make:seeder MySeeder

# Run seeders
php artisan db:seed

# Generate application key
php artisan key:generate

# Clear cache
php artisan cache:clear

# Clear configuration cache
php artisan config:clear

# Create a middleware
php artisan make:middleware MyMiddleware

# Create a Blade view
php artisan make:view myview

# Create a resourceful controller
php artisan make:controller MyResourceController --resource

# Generate a factory
php artisan make:factory MyFactory

# Generate a test
php artisan make:test MyTest
```

- [Laravel Sail](https://laravel.com/docs/10.x/sail) is a light-weight command-line interface for interacting with Laravel's default Docker development environment. Sail provides a great starting point for building a Laravel application using PHP, MySQL, and Redis without requiring prior Docker experience.