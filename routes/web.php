<?php

use App\Http\Controllers\LogoutController;
use App\Livewire\Login;
use App\Livewire\Post\Edit;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')->group(function () {
    Route::get('/', App\Livewire\Home::class)->name('home');
    Route::get('/contact', App\Livewire\Contact::class)->name('contact');
    Route::get('/user', App\Livewire\User\Index::class)->name('user.index');
    Route::get('/user/{user}', App\Livewire\User\Show::class)->name('user.show');
    Route::get('/timeline', App\Livewire\Post\Timeline::class)->name('timeline');
    Route::get('/post/{post}', Edit::class)->name('post.get');
});

Route::get('login', Login::class)->name('login')->middleware('guest');
Route::post('logout', LogoutController::class)->name('logout')->middleware('auth');
