<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getType() {

      if ($this->Type == -1)
        return 'Admin';
      else if($this->Type == 0)
        return 'Doctor';
      else if($this->Type == 1)
        return 'Nurse';
      else if($this->Type == 2)
        return 'Patient';
      }
}
