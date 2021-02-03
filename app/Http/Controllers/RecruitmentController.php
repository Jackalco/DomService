<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agencies;

class RecruitmentController extends Controller
{
    public function createForm(Request $request) {
        $agencies = Agencies::all();

        return view('recruitment', compact('agencies'));
      }
  
      public function RecruitmentForm(Request $request) {
  
        $this->validate($request, [
              'name' => 'required',
              'email' => 'required|email',
              'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
              'agency'=>'required',
              'cv' => 'required|mimes:docx,doc,pdf,jpg,png',
              'letter' => 'required|mimes:docx,doc,pdf,jpg,png'
        ]);

        \Mail::send('email/recruitment', array(
              'name' => $request->get('name'),
              'email' => $request->get('email'),
              'phone' => $request->get('phone'),
              'agency' => $request->get('agency'),
              'files' => [
                  'cv' => $request->file('cv'),
                  'letter' => $request->file('letter')
              ]
          ), function($message) use ($request){
              $message->from($request->email);
              $message->to($request->agency, 'Admin')->subject("Candidature ");
              foreach ($request->files as $file){
                $message->attach($file, [
                    'as' => $file->getClientOriginalName(),
                    'mime' => $file->getMimeType()
                    ]
                );
                }
        });
  
          return back()->with('success', 'Votre message a bien été envoyé');
      }
}
