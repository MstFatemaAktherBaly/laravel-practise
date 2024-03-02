<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PostController;
use League\CommonMark\Extension\FrontMatter\FrontMatterParser;

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

Route::get('/', [PostController::class, 'home'])->name('home');
Route::get('/posts', [PostController::class, 'allposts'])->name( 'posts' );

Route::post('/store', [PostController::class, 'storePost'] )->name('store');  //add a new post

Route::get('/edit{id}', [PostController::class,'postEdit']) -> name('edit');

Route::get('/delete/{id}' ,[PostController::class, 'deletePost'] ) -> name ('delete') ;