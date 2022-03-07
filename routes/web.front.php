<?php

// Facades.
use Illuminate\Support\Facades\Route;

// Controllers.
// Common controllers.
use App\Http\Controllers\Front\SitemapController;

// Module controllers.
use App\Http\Controllers\Front\Modules\HomeController;
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

// Home route.
Route::get('/', [HomeController::class, 'index']);

// Change website language.
Route::get('change-language/{language}', ['as' => 'change.language', 'uses' => 'App\Http\Controllers\Front\Modules\HomeController@changeLanguage']);
