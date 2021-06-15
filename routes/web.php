<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;

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

// Route::get('/', [WelcomeController::class], 'index')->name('welcome');

Route::view('/', 'welcome')->name('welcome');

Route::get('/videochat', function () {
    return view('videochat');
})->middleware(['auth'])->name('videochat');

require __DIR__.'/auth.php';


Route::middleware(['auth'])->group(function() {
    Route::get('/members', [App\Http\Controllers\MemberController::class, 'index'])->name('members');
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');
    Route::view('/pricing-plan', 'pricing-plan')->name('pricing-plan');
    Route::view('/active-group', 'active-group')->name('active-group');
    Route::view('/contact', 'contact')->name('contact');
});

Route::view('/blog', 'blog')->name('blog');
Route::view('/blog-single', 'blog-single')->name('blog-single');
Route::view('/404', '404')->name('404');