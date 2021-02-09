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

Auth::routes(['register' => false]);
/*Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function ($token) {
    return view('auth/passwords/reset', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) use ($request) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->save();

            $user->setRememberToken(Str::random(60));

            event(new PasswordReset($user));
        }
    );

    return $status == Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');*/

