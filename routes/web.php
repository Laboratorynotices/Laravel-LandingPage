<?php

use Illuminate\Support\Facades\Route;

// Include controllers
use App\Http\Controllers\LandingPageController;

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

// @TODO удалить путь по умолчанию.
Route::get('/', function () {
    return view('welcome');
});

// @TODO новый путь к странице
Route::get('/landing',
    [LandingPageController::class, 'view']
)->name('home');
