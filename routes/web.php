<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VeterinariaController;

/*/se usa para hacer uso del controlador VeterinariaController;
use App\Http\controllers\VeterinariaController;
Route::get('/', function () {
    return view('welcome');
});
//acceder a una clase del metodo.
//Route::get('/veterinaria/create',[VeterinariaController::class,'create']);
*/

//esto hace la funcion de todas las vistas del controlador
Route::resource('veterinaria',VeterinariaController::class);

