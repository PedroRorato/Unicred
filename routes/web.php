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
//Quem Somos
Route::get('/quem-somos', 'SiteController@quemSomos');
//Projetos
Route::get('/projetos', 'SiteController@projetos');
Route::get('/projetos/{id}', 'SiteController@showProjeto');
//Eventos
Route::get('/eventos', 'SiteController@eventos');
Route::get('/eventos/{id}', 'SiteController@showEvento');
//Notícias
Route::get('/noticias', 'SiteController@noticias');
Route::get('/noticias/{id}', 'SiteController@showNoticia');
//Instituições Parceiras
Route::get('/instituicoes-parceiras', 'SiteController@iParceiras');
//Contato
Route::get('/contato', 'SiteController@contato');
