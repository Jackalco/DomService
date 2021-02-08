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

Route::get('/admin', 'AdminController@index')->name('admin')->middleware('auth');
Route::get('/admin/agency/create', 'AdminController@create')->name('agency.create')->middleware('auth');
Route::post('/admin/agency', 'AdminController@store')->name('agency.store')->middleware('auth');
Route::delete('/admin/agency/delete/{id}', 'AdminController@delete')->name('agency.delete')->middleware('auth');
Route::get('/admin/agency/{id}/edit', 'AdminController@edit')->name('agency.edit')->middleware('auth');
Route::patch('/admin/agency/{id}/updtate', 'AdminController@update')->name('agency.update')->middleware('auth');

Route::get('/login', 'Auth\LoginController@show')->name('login')->middleware('guest');
Route::post('/login', 'Auth\LoginController@login')->name('login')->middleware('guest');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Auth::routes();
Auth::routes(['register' => false]);

