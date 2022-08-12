<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\appartement\AppartController;



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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//user management
route::middleware('auth','isAdmin')->group(function(){
  Route::get('/meslocataires', [App\Http\Controllers\users\UserController::class, 'AllUser'])->name('alluser');
  Route::get('/ajouter-locataire', [App\Http\Controllers\users\UserController::class, 'AddUser'])->name('adduser');
  Route::post('insert-user', [App\Http\Controllers\users\UserController::class, 'InsertUser'])->name('insertuser');
  Route::get('/modifier-locataire/{id}', [App\Http\Controllers\users\UserController::class, 'EditUser'])->name('edituser');
  Route::post('update-user/{id}', [App\Http\Controllers\users\UserController::class, 'UpdateUser'])->name('updateuser');
  Route::get('/delete-user/{id}', [App\Http\Controllers\users\UserController::class, 'DeleteUser'])->name('deleteuser');

//appartements management
  Route::get('/mesappartements', [App\Http\Controllers\appartement\AppartController::class, 'AllAppart'])->name('allappart');
  Route::get('/ajouter-appart', [App\Http\Controllers\appartement\AppartController::class, 'AddAppart'])->name('addappart');
  Route::post('insert-appart', [App\Http\Controllers\appartement\AppartController::class, 'InsertAppart'])->name('insertappart');
  Route::get('/modifier-appart/{id}', [App\Http\Controllers\appartement\AppartController::class, 'EditAppart'])->name('editappart');
  Route::post('update-appart/{id}', [App\Http\Controllers\appartement\AppartController::class, 'UpdateAppart'])->name('updateappart');
  Route::get('/delete-appart/{id}', [App\Http\Controllers\appartement\AppartController::class, 'DeleteAppart'])->name('deleteappart');

});
