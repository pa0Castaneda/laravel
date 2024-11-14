<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Models\Empleado;


Route::get('/', function () {
    return view("welcome");
});

Route::get('/empleado', function(){
    return view('empleado.index');
});

Route::get('/empleado/create', [EmpleadoController::class,'create']);
Route::resource('empleado', EmpleadoController::class);