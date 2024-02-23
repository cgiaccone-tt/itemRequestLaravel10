<?php

use App\Http\Controllers\FallbackController;
use Barryvdh\Debugbar\Facades\Debugbar;
use Barryvdh\Debugbar\Twig\Extension\Debug;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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
    Debugbar::error('Hello');
    return view('welcome');
});
//GET
Route::get('/blog', [PostsController::class, 'index'])->name('blog.index');
Route::get('/blog/{id}', [PostsController::class, 'show']);

//POST
Route::get('/blog/create', [PostsController::class, 'create']);
Route::post('/blog', [PostsController::class, 'store']);
//PUT OR PATCH
Route::get('/blog/{id}/edit', [PostsController::class, 'edit']);
Route::patch('/blog/{id}', [PostsController::class, 'update']);
//DELETE
Route::delete('/blog/{id}', [PostsController::class, 'destroy']);


Route::fallback(FallbackController::class);

//Route::get('/', HomeController::class);
//Route::any('/blog', [PostsController::class, 'index']);
