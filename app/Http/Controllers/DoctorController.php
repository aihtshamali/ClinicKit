<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\TimeTable;
class DoctorController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth:Doctor');
  }


}
