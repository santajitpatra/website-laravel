<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;


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

// Route::get('/{name?}', function ($name = null) {
//     $demo = "    <h2>h2 demo</h2>
//     ";
//     $data = compact('name', 'demo');
//     return view('home')->with($data);
// });

// Route ::get('/', function () {
//     return view('home');
// });

// Route ::get('/about', function () {
//     return view('about');
// });

// Route ::get('/contact', function () {
//     return view('contact');
// });

Route::get('/',[DemoController::class,'index']);
Route::get('/about', 'App\Http\Controller\DemoController@about');
Route::get('/contact' SingleActionController::class);