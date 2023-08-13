# Interneto manager

## Description
Interneto manager is a bookmark manager to store and save links of the internet.

The purpose is to permit the user to make a database of related links with information of saved links. You should be able to export your database and view local or use it online in a remote server.

Classify links is the best way to organize the information and make your own innernet. You can make your own databse with folders, tags, and rate of your links. Also you can search links via the type of content.

*Pass from the Internet to your own InnerNet.*

**Information** is just the **in**side **formation** with external data to create valuable knowledge.

This is project is made in **Laravel** a framework of **PHP** that uses the architectural pattern *Model-View-Controller*, the DBMS (Database Management System) is **PostgresSQL** and the web-server is **Nginx**.

### Initialize project in Laravel

0. If you want to create a new Laravel application run:
```sh
composer create-project laravel/laravel interneto-manager
composer require laravel/breeze --dev
```

2. Clone the repository `git clone https://github.com/internet0/interneto-manager`

- Install dependencies:
```sh
composer install  # vendor and the dependencies

php artisan breeze:install # also with vue / react 
php artisan migrate
# php artisan db:seed

npm install
npm run dev
```

- Copy the environment example .env.example to .env (`cp .env.example .env`) and edit the configuration of the .env file with the same configuration as docker:
```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=postgres
DB_USERNAME=postgres
DB_PASSWORD=postgres
```
Uncomment the the lines in the file 'php/php.ini' to use Postgres SQL (`extension=pdo_pgsql` `extension=pgsql`).

2. Configure the backend
To create and use the database as backend, yo need web server (Apache or Ngnix) and a database management system (MySQL, PostgresSQL). To install the server you can choose between Docker containers, virtual or real machine as W/LAMPP:

With Docker using [docker-compose.yml](docker-compose.yml):
```bash
docker-compose up -d
```

3. To start Laravel local development use:
```sh
php artisan serve
```

4. Once you have started the Artisan development server, your application will be accessible in your web browser at http://localhost:8000. 
