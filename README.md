# Interneto manager

## Description
Interneto manager is a bookmark manager to store and save links of the internet.

The purpose is to permit the user to make a database of related links with information of saved links. You should be able to export your database and view local or use it online in a remote server.

Classify links is the best way to organize the information and make your own innernet. You can make your own databse with folders, tags, and rate of your links. Also you can search links via the type of content.

*Pass from the Internet to your own InnerNet.*

**Information** is just the **in**side **formation** with external data to create valuable knowledge.


## Development part

Laravel Breeze

- Model View Controller
1. ~~Install Laravel Breeze~~
```sh
	composer require laravel/breeze --dev
	php artisan breeze:install php 
	artisan migrate
	npm install
	npm run dev
```

2. Make Model Factory Controller (mfc):  `php artisan make:Web -mfc`
	1. Create Model `php artisan make:model Model-name`
	2. Create migration  `php artisan make:migration create_product_tag_table`
	3. Create Factory  `php artisan make:factory Category`
	4. Create Controller in: `App\Http\Controllers\Controller`
3. Create View by placing a file with the  `.blade.php`  in your application's `resources/views`
4. Serve the web  `php artisan serve`

- [x] Tabla pivote poner clave primaria del mismo nombre
- [x] Cambiar Types a 1:n

php artisan make:migration create_tab_web

- [ ] Modelo Vista Controlador Interneto-manager
- [ ] Create MVC (Model View Controller)

---

## TODO

- [ ] Things ToDo


---

## Log-in credentials
user: admin
mail: admin@admin.com
password: 12345678
