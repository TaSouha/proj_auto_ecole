<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use personne;
use Auth;
class PersonneLoginController extends Controller
{


	 public function __construct()
    {
        $this->middleware('guest:personne');
    }


public function showLoginForm(){
return view('Auth.personne_login');
}
 public function login(Request $request)
    {
      // Validate the form data
      $this->validate($request, [
        'Email'   => 'required|email',
        'Mot_de_passe' => 'required|min:6'
      ]);
      // Attempt to log the user 

      if (Auth::guard('personne')->attempt(['Email' => $request->input('Email'), 'Mot_de_passe' => $request->input('password')], $request->remember)) {



        // if successful, then redirect to their intended location
       return redirect()->intended(route('personne.dashboard'));
      }
      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('Email', 'remember'));
    }

}