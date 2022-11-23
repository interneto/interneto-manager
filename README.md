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



