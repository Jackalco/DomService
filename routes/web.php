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

Route::get('/agences', 'PagesController@agencies')->name('agencies');
Route::get('/entreprise', 'PagesController@company')->name('company');
Route::get('/recrutement', 'PagesController@recruitment')->name('recruitment');
Route::get('/mentions-legales', 'PagesController@legal_notices')->name('legal-notices');

Route::get('/contact', 'PagesController@contact')->name('contact');

/*Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/services', function () {
    return view('services/services');
})->name('services');

Route::get('/agences', function () {
    return view('agencies');
})->name('agencies');

Route::get('/recrutement', function () {
    return view('recruitment');
})->name('recruitment');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', function(Request $request) {
    Mail::send(new Contact($request));
    return redirect('/');
});

Route::get('/entreprise', function () {
    return view('company');
})->name('company');

Route::get('/mentions-legales', function () {
    return view('legal_notices');
})->name('legal_notices');

Route::get('/services/entretien-logement', function () {
    return view('services/servicing');
})->name('servicing');

Route::get('/services/repassage', function () {
    return view('services/ironing');
})->name('ironing');

Route::get('/services/courses-accompagnement-sorties', function () {
    return view('services/shopping');
})->name('shopping');

Route::get('/services/aide-seniors', function () {
    return view('services/help_seniors');
})->name('help-seniors');

Route::get('/services/conciergerie', function () {
    return view('services/concierge');
})->name('concierge');

Route::get('/services/relation-prestataire', function () {
    return view('services/relationship_providers');
})->name('relationship-providers');*/

