<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\ProfilesController;

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
// Authors
Route::get('/authors', [AuthorsController::class, 'index']);
Route::get('/authors/create', [AuthorsController::class, 'create']);
Route::post('/authors/create', [AuthorsController::class, 'store']);
// Books
Route::get('/books', [BookController::class, 'index']);
Route::get('/books/create', [BookController::class, 'create']);
Route::post('/books/create', [BookController::class, 'store']);
Route::get('/books/{id}/edit', [BookController::class, 'edit']);
Route::patch('/books/{id}/edit', [BookController::class, 'update']);

// Users Route

Route::get('/users', [UsersController::class, 'index']);
Route::get('/users/create', [UsersController::class, 'create']);
Route::post('/users/create', [UsersController::class, 'store']);
Route::get('/users/{id}/edit', [UsersController::class, 'edit']);
Route::patch('/users/{id}/edit', [UsersController::class, 'update']);
Route::delete('/users/{id}/delete', [UsersController::class, 'delete']);
Route::get('/users/{id}/show', [UsersController::class, 'show']);

// Profiles
Route::get('/profiles', [ProfilesController::class, 'index']);
Route::get('/profiles/{id}/edit', [ProfilesController::class, 'edit']);
Route::patch('/profiles/{id}/edit', [ProfilesController::class, 'update']);
// Route::delete('/profiles/{id}/delete', [ProfilesController::class, 'delete']);