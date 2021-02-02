<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agencies;

class AgenciesController extends Controller
{
    public function index() {
        $agencies = Agencies::orderBy('city', 'asc')->get();

        return view('agencies', compact('agencies'));
    }
}
