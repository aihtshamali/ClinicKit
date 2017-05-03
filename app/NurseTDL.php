<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NurseTDL extends Model
{
  public function NurseTDL(){
    return $this->belongsTo('App\Nurse');
  }
}
