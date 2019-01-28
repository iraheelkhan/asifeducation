<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Enrolment;
class Participant extends Model
{
    public function enrolments(){
    	return $this->hasMany('App\Enrolment');
    }
}
