<?php

use App\User;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


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

#### Rotas de navegaçao do site
Route::get('/', 'SiteController@index')->name('site.index');
Route::get('/sobre', 'SiteController@sobre')->name('site.sobre');
Route::get('/servicos', 'SiteController@servicos')->name('site.servicos');
Route::get('/contato', 'SiteController@contato')->name('site.contato');
Route::get('/blog', 'SiteController@lista')->name('site.lista');


#### Rotas que precisam de autenticaçao
Auth::routes();
    
Route::group(['middleware' => ['auth']], function () {
    
    #### Dashboard
	Route::get('/dashboard', 'HomeController@index')->name('home');

	### Categoria Resource
	Route::resource('/categorias', 'CategoriaController');

	### Post Resource
	Route::resource('/posts', 'PostController');

	### User Resource
	Route::resource('/users', 'UserController');

});



/*
|-------------------------------------------------
| Rotas Avulsas para testes 
|-------------------------------------------------
*/

#### Atribuir politica a um usuario
// Route::get('/user-add-role', function() {
// 	// pega o user 1
// 	$user = User::find(1);
// 	// atribui a politica admin ao user
// 	$user->roles()->attach(1);

// 	return "Política de Admin atribuída com sucesso para: " .$user->name;

// });

#### Exibir o nome do usuario e sua politica
// Route::get('/user-role', function() {

// 	$user = User::find(1)->with('roles')->get();

// 	// dd($user);
//    	echo $user[0]->name.'<br />'.
//    	$user[0]->roles[0]->name;
   	
// });

#### Atribuir todas as permissoes para a role admin
// Route::get('/role-admin', function() {
// 	// pega a role admin
// 	$role = Role::where('name', 'Admin')->get()->first();
// 	// pega todas as permissoes
// 	$permissions = Permission::all();

// 	foreach ($permissions as $permission) {
        
//         $role->givePermissionTo($permission);
//     }
	
// 	return "Permissões atribuídas com sucesso para: " .$role->name;
  
   	
// });

#### Atribuir algumas permissoes para a role autor
// Route::get('/role-autor', function() {
// 	// pega a role autor
// 	$role = Role::where('name', 'Autor')->get()->first();

//     $role->givePermissionTo(['cria-post', 'lista-post', 'atualiza-post', 'deleta-post',]);
    
// 	return "Permissões atribuídas com sucesso para: " .$role->name;
  
   	
// });

#### Redirecionar /home para /login
Route::get('/home', function() {
	
	return redirect()->route('login');
   	
});



