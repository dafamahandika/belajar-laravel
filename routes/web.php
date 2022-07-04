<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteService[Provider within a group which
| contains] the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BlogController::class, 'home']);

Route::get('/portofolio', [BlogController::class, 'portofolio'] );

Route::get('/kontak', [BlogController::class, 'kontak']);


