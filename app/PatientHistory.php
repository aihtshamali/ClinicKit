<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientHistory extends Model
{
  public function Patient(){
    return $this->hasMany('App\Patient');
  }

}
