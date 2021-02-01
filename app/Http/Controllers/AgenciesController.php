<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agencies;

class AgenciesController extends Controller
{
    public function index() {
        $agencies = Agencies::all();

        return view('agencies', compact('agencies'));
    }
}
