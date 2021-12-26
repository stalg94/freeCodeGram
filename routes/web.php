<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FollowsController;
use App\Mail\NewUserWelcomeMail;
use Illuminate\Support\Facades\Auth;

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



Auth::routes();
Route::get('/email', function (){
    return new NewUserWelcomeMail();
});
Route::post('follow/{user}', [FollowsController::class, 'store'] );

Route::get('/', [PostController::class, 'index'] );
Route::get('/profile/{user}', [ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', [ProfilesController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [ProfilesController::class, 'update'])->name('profile.update');

Route::get('/p/create',[PostController::class, 'create'] );
Route::get('/p/{post}',[PostController::class, 'show'] );
Route::post('/p',[PostController::class, 'store'] );
