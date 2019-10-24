<?php

Route::get('/', function () {
    return view('welcome');
});

Route::fallback(function() {
    return '<h1>Error 404</h1>';
});




Route::get('forget','Controller1@forget1');
Route::get('bienvenido','Controller1@bienvenido1'); //Bien
Route::any('login/{msj?}','Controller1@usuarioycontraseña'); //Bien
Route::any('login2/','Controller1@introducejuanito');//Bien
Route::get('home/','Controller1@home');//Bien

