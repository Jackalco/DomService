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
            'address'=> 'required',
            'lat' => 'required',
            'lng' => 'required'
        ]);


        Agencies::insert(
            ['city' => $request->get('city'), 'email' => $request->get('email'), 'phone' => $request->get('phone'), 'address' => $request->get('address'), 'lat' => $request->get('lat'), 'lng' => $request->get('lng')]
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

    public function update(Request $request, $id) {
        $this->validate($request, [
            'city' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'address'=>'required',
            'lat' => 'required',
            'lng' => 'required'
        ]);

        $agency = Agencies::find($id);

        if($agency) {
            $agency->update(
                ['city' => $request->get('city'), 'email' => $request->get('email'), 'phone' => $request->get('phone'), 'address' => $request->get('address'), 'lat' => $request->get('lat'), 'lng' => $request->get('lng')]
            );   
        }

        return back()->with('success', 'L\'agence a bien été modifiée.');
    }
}

