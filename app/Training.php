<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    
    public function cordinator(){
    	return $this->belongsTo('App\User', 'user_id', 'id')->withDefault();
    }

    public function resourceperson(){
    	return $this->belongsTo('App\ResourcePerson', 'resource_person_id', 'id')->withDefault();
    }
}
