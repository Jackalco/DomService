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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
