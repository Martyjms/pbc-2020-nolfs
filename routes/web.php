<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/', 'HomePagesController@home');
Route::get('map', 'HomePagesController@map');





// Alternate method of writing Routes that saves time and condenses code
/* The first paramater sets what is shown in the URL while the second parameter
is the name of the someName.blade.php view */


Route::view('parents', 'parents');
Route::view('staff', 'staff');
Route::view('director', 'director');
Route::view('connect', 'connect');
Route::view('volunteer', 'volunteer');
Route::view('register', 'register');
Route::view('album', 'album');
Route::view('highlightVideo', 'highlightVideo');
Route::view('camps', 'camps');
Route::view('activities', 'activities');
Route::view('speakers', 'speakers');
Route::view('covid', 'covid');




// Contact Form
Route::get('contact', 'ContactFormController@create');
Route::post('contact', 'ContactFormController@store');


// Longer version of writing Routes

Route::get('about', function () {
    return view('about');
});

// Route::get('customers', 'CustomersController@index');
// Route::get('customers/create', 'CustomersController@create');
// Route::post('customers', 'CustomersController@store');
// Route::get('customers/{customer}', 'CustomersController@show');
// Route::get('customers/{customer}/edit', 'CustomersController@edit');
// Route::patch('customers/{customer}', 'CustomersController@update');







