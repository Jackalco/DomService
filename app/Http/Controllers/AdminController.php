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

    public function store(Request $request) {
        $this->validate($request, [
            'city' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'address'=>'required',
      ]);

      Agencies::insert(
          ['city' => $request->get('city'), 'email' => $request->get('email'), 'phone' => $request->get('phone'), 'address' => $request->get('address')]
      );

      return back()->with('success', 'L\'agence a bien été ajoutée.');
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

