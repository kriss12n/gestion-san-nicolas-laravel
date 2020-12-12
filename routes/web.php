<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoCategoriaController;
use App\Http\Controllers\CursoController;


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
    return view('principal');
});


Route::get('download-jsonfile', array('as'=> 'file.download', 'uses' => 'FileController@downloadJSONFile'));


Route::get('/user', [UserController::class, 'index']);
Route::resource('Administracion/usuarios','AdministracionUserController');
Route::get('Administracion',[ 'as'=>'administracion', 'uses'=>'PaginaController@administracion'])->middleware('user');
Route::get('Administracion/nivel','CursoController@nivel');
Route::get('Administracion/curso',[CursoController::class,"index"]);
Route::post('/Administracion/student/{id}/edit',[CursoController::class,"edit"]);
Route::post('/Administracion/studentcurso/{id}/edit',[CursoController::class,"editc"]);
Route::post('/Administracion/studentnotas/{id}/edit',[CursoController::class,"editn"]);
Route::post('/Administracion/studentnotast/{id}/edit',[CursoController::class,"editnt"]);

Route::get('Administracion/cursocategoria',[CursoController::class,'index']);
Route::post('Administracion/cursocategoria/{id}/edit',[CursoController::class,'edit']);
