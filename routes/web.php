<?php

use App\User;
use App\Models\Role;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;


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
Route::group(['middleware' => ['auth']], function() {
    
	#### Dashboard
	Route::get('/dashboard', 'HomeController@index')->name('home');

	### Categorias Resource
	Route::resource('/categorias', 'CategoriaController');

	### Post Resource
	Route::resource('/posts', 'PostController');

});


Auth::routes();









/*
|-------------------------------------------------
| Rotas Avulsas para testes
|-------------------------------------------------
*/

#### Pegar o usuario e atribuir uma política
// Route::get('/userpolitica', function() {

// 	$user = User::find(1);
// 	$user->roles()->attach(1);

// });

#### Pegar o nome do usuario e sua politica
Route::get('/user', function() {

	$user = User::find(1)->with('roles')->get();

	// dd($user);
   	echo $user[0]->name.'<br />'.
   	$user[0]->roles[0]->name;
   	
});

#### Pegar um post
// Route::get('/post/{id}', function($id) {

// 	$post = Post::find($id);

// 	// dd($user);
//    	echo $post->titulo.'<br />'.
//    	$post->texto;
   	
// });

#### Criar um post
// ***obs: qdo aparece a mensagem de erro NO MESSAGE significa que o método está errado (se estiver, Get trocar por Post, etc)

// Route::get('/novopost', function() {

// 	$post = new Post;

// 	$post->user_id = \Auth::user()->id;
// 	$post->titulo = 'Testando o novo post';
// 	$post->slug = 'Testando o novo post';
// 	$post->texto = 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Ciceros De Finibus Bonorum et Malorum for use in a type specimen book';
// 	$post->image = 0;


//     $post->save();

//     return "Post salvo com sucesso!";
   	
// });


