<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agencies;

class ContactController extends Controller
{
    public function createForm(Request $request) {
        $agencies = Agencies::all();

        return view('contact', compact('agencies'));
      }
  
      public function ContactForm(Request $request) {
  
        $this->validate($request, [
              'name' => 'required',
              'email' => 'required|email',
              'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
              'agency'=>'required',
              'message' => 'required'
        ]);

        \Mail::send('email/mail', array(
              'name' => $request->get('name'),
              'email' => $request->get('email'),
              'phone' => $request->get('phone'),
              'agency' => $request->get('agency'),
              'user_query' => $request->get('message'),
          ), function($message) use ($request){
              $message->from($request->email);
              $message->to('vincent.jacques1311@gmail.com', 'Admin')->subject("Devis");
        });
  
          return back()->with('success', 'Votre message a bien été envoyé');
      }
}
