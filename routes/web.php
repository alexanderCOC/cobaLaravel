<?php


//Menampilkan dengan routes

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
// 	$nama = "Iqbal Fauzi";
//     return view('about',[ "nama"=> $nama ]);
// });

//Menampilkan dengan contoller
Route::get('/','PagesController@home');
Route::get('/about','PagesController@about');

//default method di laravel adalah show
Route::get('/mahasiswa','MahasiswaController@index');


//Student
// Route::get('/students','StudentsController@index');
// Route::get('/students/create','StudentsController@create');
// Route::get('/students/{student}','StudentsController@show');
// Route::post('/students','StudentsController@store');
// Route::delete('/students/{student}','StudentsController@destroy');
// Route::get('/students/{student}/edit','StudentsController@edit');
// Route::patch('/students/{student}','StudentsController@update');

//Opsi untuk Controller Students
Route::resource('students','StudentsController');





/*
noted
1. php artisan serve 		untuk menjalankan xampp
2. php artisan make:controller MahasiswaController 				untuk buat controller
3. php artisan make:controller MahasiswaController --resource 	untuk buat controller plus dengan resource nya
4. php artisan make:controller StudentsController -r -m Student 	untuk buat controller plus dengan resource dan model
5. php artisan help  make:controller 			untuk helping all


php artisan migrate
php artisan migrate:rollback
php artisan make:migration create_students_table
php artisan make:migration add_soft_deleted_to_students //softdeleted

php artisan make:model Student



*/