<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agencies;

class AdminController extends Controller
{
    public function index() {
        $agencies = Agencies::orderBy('city', 'asc')->get();

        return view('admin/admin', compact('agencies'));
    }

    public function create() {
        return view('admin/create');
    }

    public function store() {
        return view('admin/create');
    }

    public function delete($id) {
        $agency = Agencies::find($id);

        if ($agency) {
            $agency->delete();
        }

        return redirect('admin');
    }

    public function edit($id) {
        $agency = Agencies::find($id);
        
        if ($agency) {
            return view('admin/edit', compact('agency'));
        } 
    }

    public function udpate() {
        return view('admin/create');
    }
}

