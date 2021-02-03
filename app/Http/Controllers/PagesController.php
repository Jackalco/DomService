<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function services()
    {
        return view('services/services');
    }

    public function concierge()
    {
        return view('services/concierge');
    }

    public function help_seniors()
    {
        return view('services/help_seniors');
    }

    public function ironing()
    {
        return view('services/ironing');
    }

    public function relationship_providers()
    {
        return view('services/relationship_providers');
    }

    public function servicing()
    {
        return view('services/servicing');
    }

    public function shopping()
    {
        return view('services/shopping');
    }

    public function agencies()
    {
        return view('agencies');
    }

    public function company()
    {
        return view('company');
    }

    public function contact()
    {
        return view('contact');
    }

    public function legal_mention()
    {
        return view('legal_mention');
    }

    public function recruitment()
    {
        return view('recruitment');
    }
}
