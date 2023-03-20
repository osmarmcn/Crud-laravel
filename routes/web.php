<?php

use App\Http\Controllers\jogosController;
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

/*Route::get('/', function () {
    return view('welcome');
});
*/

//Route::view('jogos', 'jogos');

/*Route::get('/jogos', function() {
    return "olá ! tudo bem?";
});
*/

/*Route::view('/jogos', 'jogos', ['name' => 'Osmar']);
*/

/*Route::get('/jogos/{name?}', function($name = null){
    return view('jogos', ['nomeJogo' => $name]);

});
*/

/*Route::get('/jogos/{id?}/{name?}', function($id = null , $name = null){
    return view('jogos', ['idJogo' =>$id , 'nomeJogo' =>$name]);

})->where(['id' => '[0-9]+', 'name' => '[a-z]+' ]);
*/

Route::prefix('jogos')->group(function(){
    Route::get('/', [jogosController::class, 'index'])->name('jogos-index');
    Route::get('create', [jogosController::class, 'create'])->name('jogos-create');
    Route::post('/', [jogosController::class, 'store'])->name('jogos-store');
    Route::get('{id}/editar', [jogosController::class, 'editar'])->where('id', '[0-9]+')->name('jogos-editar');
    Route::put('/{id}',[jogosController::class, 'update'])->where('id','[0-9]+')->name('jogos-update');
    Route::delete('/{id}',[jogosController::class, 'destroy'])->where('id','[0-9]+')->name('jogos-destroy');

});



Route::fallback(function(){
    return "Erro!";
});
