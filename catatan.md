##RUN COMPAILER Artisan
 php artisan serve
 php artisan serve --host=Domain --port 8000
 php artisan serve --host=Localhost --port 8000
 php artisan serve --host=Public_IP --port 8000
 
 
##console/terminal/command prompt
 path/laravel_project>
    #Untuk Controller
	path 	: path + app\Http\Controllers>
	command :php artisan make:controller ContentsController
	
	#ntuk Model
	path			: path + \app>					#default.
	add path model	: path + app\Http\Model>		#pindah path model.
	commad			: php artisan make:model Content

##Route 
  path 	: path + app\routes\>web.php
  Example	:
	#Default Home
	Route::get('/', function () {
		return "tes";
	});

	# 
	Route::get('halo', function(){
		return 'Hello world! Halo semuanya, selamat belajar Laravel.';
	});
	
	#oute Controller, di kondisikan/modify
	Route::get('contents', 'ContentsController@index'); 
	Route::get('contents/create', 'ContentsController@create'); 
	Route::post('contents/createDb', 'ContentsController@createDb'); 
  
	#Route Controller All Action
	Route::resource('contents','ContentsController');
	
##View
  Path		: path + app\resources\views>
  Example 	: folder pdath "views\content" pemanggilan conntent.nama_file.
	
	