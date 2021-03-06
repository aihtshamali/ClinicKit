<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Patient;
use Auth;
class PatientLoginController extends Controller
{
    /*
      |--------------------------------------------------------------------------
      | Login Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles authenticating users for the application and
      | redirecting them to your home screen. The controller uses a trait
      | to conveniently provide its functionality to your applications.
      |
      */

  //    use AuthenticatesUsers;

      /**
       * Where to redirect users after login.
       *
       * @var string
       */

      /**
       * Create a new controller instance.
       *
       * @return void
       */
       public function ShowLoginForm(){
         return view('patient.patient-login');
       }

      public function __construct()
      {
          $this->middleware('guest')->except('logout');
      }

      public function login(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        if (Auth::guard('patient')->attempt(['email'=>$request->email,'password'=> $request->password],$request->remember)) {

            return redirect()->intended(route('/profile'));
        }
        else {
          return redirect()->back()->withInput($request->only('email','remember'));
        }
      }


}
