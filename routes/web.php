<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/demo', function () {
//     echo "Hello World!";
// });

Route::post('/test', function () {
    echo "Hello World - Test!";
});

// Route::put('user/{id}', function ($id) {

// });

// Route::patch();

// Route::delete('user/{id}', function ($id) {

// });
Route::any('/test', function () {
    echo "Hello World - Test!";
});

Route::get('/demo/{name?}/{id?}', function ($name = null, $id = null) {
    // return view('demo');
    // echo $name." ";
    // echo $id;
    $data = compact('name', 'id');
    // print_r($data);
    return view('demo', $data);
    // return view('demo')->with($data);

});