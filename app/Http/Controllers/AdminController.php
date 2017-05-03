<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Doctor;
use App\Nurse;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function showProfile(){
      $admin=Auth::user();
      return view('admin.Profile')->with('admin',$admin);
    }
    public function Logout(){
      Auth::logout();
      return redirect()->route('/');
    }
    public function ShowCreateDoctor(){
      return view('admin.CreateDoctor');
    }
    public function createDoctor(Request $request) {
      $this->validate($request, [
          'name'=>'required',
          'email' => 'required|email',
          'password' => 'required|min:6'
      ]);
      if (Auth::guard('doctor')->attempt(['email'=>$request->email,'password'=> $request->password],$request->remember)) {
          $msg="Created Successfully";
          return redirect()->intended(route('admin/dashboard')->with('error',$msg));
      }
      else {
        return redirect()->back()->withInput($request->only('email','remember'));
      }
    }
        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $admin=Auth::user();
        return view('admin.dashboard')->with('admin',$admin);
    }
}
