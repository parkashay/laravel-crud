<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;


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
    return view('welcome');
});

Route::get('/posts', [PostsController::class, 'index']);
Route::get('/delete/{id}', [PostsController::class, 'delete']);
Route::post('/createpost', [PostsController::class, 'create']);
Route::get('/singlepost/{id}', [PostsController::class, 'getOne']);
Route::get('/edit/{id}', [PostsController::class, 'edit']);
Route::post('/update/{id}', [PostsController::class, 'update']);