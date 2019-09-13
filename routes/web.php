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

//// SITE ////
//Home
Route::get('/', 'SiteController@home');
//Contato
Route::get('/contato', 'SiteController@contato');
//Eventos
Route::get('/eventos', 'SiteController@eventos');
Route::get('/eventos/{id}', 'SiteController@showEvento');
//Instituições Parceiras
Route::get('/instituicoes-parceiras', 'SiteController@iParceiras');
//Mantenedores
Route::get('/mantenedores/{id}', 'SiteController@showMantenedor');
//Notícias
Route::get('/noticias', 'SiteController@noticias');
Route::get('/noticias/{id}', 'SiteController@showNoticia');
//Quem Somos
Route::get('/quem-somos', 'SiteController@quemSomos');
//Projetos
Route::get('/projetos', 'SiteController@projetos');
Route::get('/projetos/{id}', 'SiteController@showProjeto');

//// AUTH ////
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
//Logout
Route::post('/logout', 'Auth\LogoutController@logout')->name('logout');
//Password
Route::prefix('/password')->group(function(){
    Route::post('/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::post('/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
    Route::get('/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::get('/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
});
//// DASHBOARD ////
Route::prefix('/admin')->group(function(){
    //Dashboard
    Route::get('/', 'Admin\InicialController@index');
    Route::get('/conta', 'Admin\ContaController@show');
    Route::patch('/conta', 'Admin\ContaController@update');
    //Eventos
    Route::get('/eventos', 'Admin\EventosController@index');
    Route::get('/eventos/create', 'Admin\EventosController@create');
    Route::post('/eventos', 'Admin\EventosController@store');
    Route::get('/eventos/{id}', 'Admin\EventosController@show');
    Route::patch('/eventos/{id}', 'Admin\EventosController@update');
    Route::delete('/eventos/{id}', 'Admin\EventosController@destroy');
    //Instituições Parceiras
    Route::get('/instituicoes-parceiras', 'Admin\InstParceirasController@index');
    Route::get('/instituicoes-parceiras/create', 'Admin\InstParceirasController@create');
    Route::post('/instituicoes-parceiras', 'Admin\InstParceirasController@store');
    Route::get('/instituicoes-parceiras/{id}', 'Admin\InstParceirasController@show');
    Route::patch('/instituicoes-parceiras/{id}', 'Admin\InstParceirasController@update');
    Route::delete('/instituicoes-parceiras/{id}', 'Admin\InstParceirasController@destroy');
    //Mantenedores
    Route::get('/mantenedores', 'Admin\MantenedoresController@index');
    Route::get('/mantenedores/create', 'Admin\MantenedoresController@create');
    Route::post('/mantenedores', 'Admin\MantenedoresController@store');
    Route::get('/mantenedores/{id}', 'Admin\MantenedoresController@show');
    Route::patch('/mantenedores/{id}', 'Admin\MantenedoresController@update');
    Route::delete('/mantenedores/{id}', 'Admin\MantenedoresController@destroy');
    //Notícias
    Route::get('/noticias', 'Admin\NoticiasController@index');
    Route::get('/noticias/create', 'Admin\NoticiasController@create');
    Route::post('/noticias', 'Admin\NoticiasController@store');
    Route::get('/noticias/{id}', 'Admin\NoticiasController@show');
    Route::patch('/noticias/{id}', 'Admin\NoticiasController@update');
    Route::delete('/noticias/{id}', 'Admin\NoticiasController@destroy');
    //Projetos
    Route::get('/projetos', 'Admin\ProjetosController@index');
    Route::get('/projetos/create', 'Admin\ProjetosController@create');
    Route::post('/projetos', 'Admin\ProjetosController@store');
    Route::get('/projetos/{id}', 'Admin\ProjetosController@show');
    Route::patch('/projetos/{id}', 'Admin\ProjetosController@update');
    Route::delete('/projetos/{id}', 'Admin\ProjetosController@destroy');
    //Usuarios
    Route::get('/usuarios', 'Admin\UsuariosController@index');
    Route::get('/usuarios/create', 'Admin\UsuariosController@create');
    Route::post('/usuarios', 'Admin\UsuariosController@store');
    Route::get('/usuarios/{id}', 'Admin\UsuariosController@show');
    Route::patch('/usuarios/{id}', 'Admin\UsuariosController@update');
    Route::delete('/usuarios/{id}', 'Admin\UsuariosController@destroy');
});
//Storage
Route::get('storage/{filename}', function ($filename){
    $path = storage_path('public/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});
//Home Redirect
Route::get('home', function (){
    return redirect('/admin');
});
