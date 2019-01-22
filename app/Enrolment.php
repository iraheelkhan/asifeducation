<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Participant;
class Enrolment extends Model
{
    
    public function participant(){
    	return $this->belongsTo('App\Participant')->withDefault();
    }

    public function training(){
    	return $this->belongsTo('App\Training')->withDefault();
    }
}
