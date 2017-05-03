<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\TimeTable;
class TimeTableController extends Controller
{

    public function welcome(){
        $doc=Doctor::all();
        $time=Timetable::all();
      return view('welcome',['Doc'=>$doc,'time'=>$time]);
  }
      public function show($id){
        $doc=Doctor::find($id);
        $time=Timetable::all()->where('D_id', $id);
      }
}
