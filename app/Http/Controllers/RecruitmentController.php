<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecruitmentController extends Controller
{
    public function createForm(Request $request) {
        return view('recruitment');
      }
  
      public function RecruitmentForm(Request $request) {
  
        $this->validate($request, [
              'name' => 'required',
              'email' => 'required|email',
              'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
              'agency'=>'required',
              'cv' => 'required',
              'letter' => 'required'
        ]);

        \Mail::send('email/recruitment', array(
              'name' => $request->get('name'),
              'email' => $request->get('email'),
              'phone' => $request->get('phone'),
              'agency' => $request->get('agency'),
              'files' => [
                  public_path($request->file('cv')->getRealPath()),
                  public_path($request->file('letter')->getRealPath())
              ]
          ), function($message) use ($request){
              $message->from($request->email);
              $message->to('vincent.jacques1311@gmail.com', 'Admin')->subject("Candidature");
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
