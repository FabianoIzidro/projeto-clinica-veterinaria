<?php

use Illuminate\Support\Facades\Route;

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
    return view('login');
});

//LOGIN
Route::get('/login', 'LoginController@login')->name('login');
Route::get('/logout', 'LoginController@logout')->name('logout');
Route::post('/acessar', 'LoginController@acessar')->name('acessar');



Route::group(['middleware' => ['login']], function(){
    
    //MENU
    Route::get('/menu', 'LoginController@menu')->name('menu');
   
    //CLIENTE
Route::group(['prefix' => 'cliente'], function(){
    Route::get('cadastro_C', 'clienteController@cadastro_C')->name('cadastro_C');
    Route::get('voltar_C', 'clienteController@voltar_C')->name('voltar_C');
    Route::get('telalogin_C', 'clienteController@telalogin_C')->name('telalogin_C');
    Route::post('cadastrar_C', 'clienteController@cadastrar_C')->name('cadastrar_C');
    Route::get('listar_C', 'clienteController@listar_C')->name('listar_C'); 
    Route::get('visualizar_C/{id}', 'clienteController@visualizar_C')->name('visualizar_C');
    Route::get('edicao_C/{id}', 'clienteController@edicao_C')->name('edicao_C');
    Route::post('editar_C/{id}', 'clienteController@editar_C')->name('editar_C');
    Route::get('excluir_C/{id}', 'clienteController@excluir_C')->name('excluir_C');
    Route::get('retornar_C', 'clienteController@retornar_C')->name('retornar_C');
}); 

    //ANIMAL
Route::group(['prefix' => 'animal'], function(){
    Route::get('cadastro_A', 'animalController@cadastro_A')->name('cadastro_A'); 
    Route::get('voltar_A', 'animalController@voltar_A')->name('voltar_A');  
    Route::get('telalogin_A', 'animalController@telalogin_A')->name('telalogin_A'); 
    Route::post('cadastrar_A', 'animalController@cadastrar_A')->name('cadastrar_A'); 
    Route::get('listar_A', 'animalController@listar_A')->name('listar_A'); 
    Route::get('visualizar_A/{id}', 'animalController@visualizar_A')->name('visualizar_A');
    Route::get('edicao_A/{id}', 'animalController@edicao_A')->name('edicao_A');
    Route::post('editar_A/{id}', 'animalController@editar_A')->name('editar_A');
    Route::get('excluir_A/{id}', 'animalController@excluir_A')->name('excluir_A');
    Route::get('retornar_A', 'animalController@retornar_A')->name('retornar_A');
});

});