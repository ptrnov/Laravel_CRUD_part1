<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel
	Catatan Singkat

## RUN COMPAILER Artisan
 php artisan serve
 php artisan serve --host=Domain --port 8000
 php artisan serve --host=Localhost --port 8000
 php artisan serve --host=Public_IP --port 8000
 
 
## Console/terminal/command prompt
 	- path/laravel_project>
    - Untuk Controller
	path 	: path + app\Http\Controllers>
	command :php artisan make:controller ContentsController
	
	- Untuk Model
	path			: path + \app>					#default.
	add path model	: path + app\Http\Model>		#pindah path model.
	commad			: php artisan make:model Content

## Route 
  path 	: path + app\routes\>web.php
  Example	:
	- Default Home
	Route::get('/', function () {
		return "tes";
	});

	- Megunakan function
	Route::get('halo', function(){
		return 'Hello world! Halo semuanya, selamat belajar Laravel.';
	});
	
	-Route Controller, di kondisikan/modify
	Route::get('contents', 'ContentsController@index'); 
	Route::get('contents/create', 'ContentsController@create'); 
	Route::post('contents/createDb', 'ContentsController@createDb'); 
  
	-Route Controller All Action
	Route::resource('contents','ContentsController');
	
##View
  Path		: path + app\resources\views>
  Example 	: folder pdath "views\content" pemanggilan conntent.nama_file.
	
## Vendor Cached
php artisan cache:clear
php artisan route:clear
composer dump-autoload -o


## reff
- Form https://scotch.io/tutorials/simple-laravel-crud-with-resource-controllers
- https://yoesuv.blogspot.com/2016/03/laravel-form-edit-dan-delete.html