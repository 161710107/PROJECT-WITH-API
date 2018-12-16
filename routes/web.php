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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/buy', function() {
	return view('buy');
});

Route::get('/welcome', function(){
	return view('welcome');
});

// Category
Route::get('/category', function() {
	return view('category.index');
});

Route::get('/category/edit', function() {
	return view('category.edit');
});

Route::get('/category/show', function() {
	return view('category.show');
});

// MasterBank
Route::get('/masterbank', function() {
	return view('masterbank.index');
});

Route::get('/masterbank/edit', function() {
	return view('masterbank.edit');
});

Route::get('/masterbank/show', function() {
	return view('masterbank.show');
});

//Event
Route::get('/event', function() {
	return view('event.index');
});

Route::get('/event/create', function() {
	return view('event.create');
});

Route::get('/event/edit', function() {
	return view('event.edit');
});

Route::get('/event/show', function() {
	return view('event.show');
});




// Transfer
Route::get('/transfer', function() {
	return view('transfer.index');
});

Route::get('/transfer/create', function() {
	return view('transfer.create');
});

Route::get('/transfer/edit', function() {
	return view('transfer.edit');
});
Route::get('/transfer/show', function() {
	return view('transfer.show');
});


// Bank
Route::get('/bank', function() {
	return view('bank.index');
});

Route::get('/bank/create', function() {
	return view('bank.create');
});

Route::get('/bank/edit', function() {
	return view('bank.edit');
});

Route::get('/bank/show', function() {
	return view('bank.show');
});

//User
Route::get('/user', function() {
	return view('user.index');
});

Route::get('/user/edit', function() {
	return view('user.edit');
});
Route::get('/user/show', function() {
	return view('user.show');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
