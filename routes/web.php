<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\Contact;

Route::get('/', 'PagesController@home')->name('home');

Route::get('/services', 'PagesController@services')->name('services');
Route::get('/services/entretien-logement', 'PagesController@servicing')->name('servicing');
Route::get('/services/conciergerie', 'PagesController@concierge')->name('concierge');
Route::get('/services/aide-seniors', 'PagesController@help_seniors')->name('help-seniors');
Route::get('/services/repassage', 'PagesController@ironing')->name('ironing');
Route::get('/services/relation-prestataire', 'PagesController@relationship_providers')->name('relationship-providers');
Route::get('/services/courses-accompagnement-sorties', 'PagesController@shopping')->name('shopping');

Route::get('/entreprise', 'PagesController@company')->name('company');
Route::get('/mentions-legales', 'PagesController@legal_mention')->name('legal-mention');

Route::get('/contact', 'ContactController@createForm')->name('contact');
Route::post('/contact', 'ContactController@ContactForm')->name('contact.store');

Route::get('/recrutement', 'RecruitmentController@createForm')->name('recruitment');
Route::post('/recrutement', 'RecruitmentController@RecruitmentForm')->name('recruitment.store');

Route::get('/agences', 'AgenciesController@index')->name('agencies');

Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/create', 'AdminController@create')->name('create');
Route::post('/admin/create', 'AdminController@store')->name('store');
Route::delete('/admin/delete/{id}', 'AdminController@delete')->name('delete');
Route::get('/admin/{id}/edit', 'AdminController@edit')->name('edit');
Route::patch('/admin/{id}', 'AdminController@update')->name('update');

Route::get('/login', 'LoginController@show')->name('login')->middleware('guest');
Route::post('/login', 'LoginController@login')->name('login')->middleware('guest');

Auth::routes();

