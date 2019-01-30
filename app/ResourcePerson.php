<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResourcePerson extends Model
{
    public function trainings(){
    	return $this->hasMany('App\Training', 'resource_person_id', 'id');
    }
}
