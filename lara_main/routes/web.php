<?php
use Illuminate\Support\Facades\Route;

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
