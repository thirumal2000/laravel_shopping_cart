<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

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


Route::get('/',[HomeController::Class,"index"]);

Route::get('/users',[AdminController::Class,"user"]);

Route::get('/deleteuser/{id}',[AdminController::Class,"deleteuser"]);

Route::get('/foodmenu',[AdminController::Class,"foodmenu"]);

Route::post('/uploadfood',[AdminController::Class,"upload"]);

Route::get('/deletemenu/{id}',[AdminController::Class,"deletemenu"]);

Route::get('/updateview/{id}',[AdminController::Class,"updateview"]);

Route::post('/update/{id}',[AdminController::Class,"update"]);

Route::post('/reservation',[AdminController::Class,"reservation"]);

Route::get('/viewreservation',[AdminController::Class,"viewreservation"]);

Route::get('/viewchef',[AdminController::Class,"viewchef"]);

Route::post('/uploadchef',[AdminController::Class,"uploadchef"]);

Route::get('/updatechef/{id}',[AdminController::Class,"updatechef"]);

Route::get('/redirects',[HomeController::Class,"redirects"]);

Route::post('/addcart',[HomeController::Class,"addcart"]);

Route::post('/updatefoodchef/{id}',[AdminController::Class,"updatefoodchef"]);

Route::get('/deletechef/{id}',[AdminController::Class,"deletechef"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
