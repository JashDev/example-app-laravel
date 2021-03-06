<?php

use App\Http\Controllers\PruebaController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// base/api/prueba-get
// http://localhost/example-app/public/api/prueba

// index => GET
// show => GET /id
// store => POST
// update => PUT
// destroy => DELETE

// update table set nombre = nuevo nombre where id = 1

Route::apiResource('/test', PruebaController::class);
Route::apiResource('/usuario', UsuarioController::class);

//Route::get('/prueba', [
//  PruebaController::class,
//  'pruebaGet'
//]);
//Route::post('/prueba', [
//  PruebaController::class,
//  'pruebaPost'
//]);
Route::put('/prueba/{id}', function ($id) {
  return response([
    'message' => 'Ruta put OK',
    'id'      => $id
  ], 200);
});
//Route::delete('/prueba', function () {
//  return response([
//    'message' => 'Ruta delete OK'
//  ], 200);
//});
//
//Route::get('/primera-prueba', function () {
//  return response([
//    'message' => 'hola'
//  ], 200);
//});
//
//Route::put('/saludo/{a}/{b}', function ($numero, $id) {
//  $contentBody = request()->post();
//  $nombre = request('nombre');
//
//  $queryParams = request()->query();
//
//  $token = request()->header('token');
//
//  return response([
//    'message' => 'Hola desde /saludo',
//    'body'    => $contentBody,
//    'query'   => $queryParams,
//    'token'   => $token,
//    'numero'  => $numero,
//    'id'      => $id
//  ], 200);
//});
