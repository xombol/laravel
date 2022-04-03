<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;


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
require __DIR__.'/auth.php';

Route::get('/laravel', function () {
    return view('welcome');
});
Route::get('/guest', function () {
    return view('guest_page');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::middleware('auth')->group(function () {

    Route::get('/', function () {
        return view('home');
    })->name('home');


    Route::get('/about', function () {
        return view('about');
    })->name('about');
    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');
    Route::post('/contact/submit', 'ContactController@submit')->name('contact-form');

    Route::get('/contact/all' ,'ContactController@allData')->name('contact-data');
    Route::get('/contact/all/{id}','ContactController@showOneMessage')->name('contact-data-one');
    Route::get('/contact/all/{id}/update/','ContactController@contactUpdate')->name('contact-update');
    Route::get('/contact/all/{id}/delete/','ContactController@contactDelete')->name('contact-delete');
    Route::post('/contact/all/{id}/update/','ContactController@contactUpdatePost')->name('contact-update-submit');

});
