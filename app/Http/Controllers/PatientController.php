<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Patient;
use App\Nurse;
class PatientController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:patient');
    }
    public function showProfile(){
      $admin=Auth::user();
      $p=Patient::all()->find($admin);
      return view('Patient.profile')->with('admin',$admin);
    }
    public function Logout(){
      Auth::logout();
      return redirect()->route('/');
    }


        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $admin=Auth::user();
        return view('home')->with('admin',$admin);
    }
}
