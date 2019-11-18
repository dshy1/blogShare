<?php

use App\User;
use App\Models\Role;

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


#### Rotas que precisam de autenticaçao
Route::group(['middleware' => ['auth']], function () {
    
	#### Dashboard
	Route::get('/dashboard', 'HomeController@index')->name('home');
	### Categorias
	Route::resource('/categorias', 'CategoriaController');


});



Auth::routes();


#### Pegar o nome do usuario e sua politica
Route::get('/user', function () {

	$user = User::find(1)->with('roles')->get();

	// dd($user);
   	echo $user[0]->name.'<br />'.
   	$user[0]->roles[0]->name;
   	
});
