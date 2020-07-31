<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
	// Una carrera tiene varios usuarios (alumnos)
    public function users()
    {
    	return $this->hasMany(User::class);
    }
}
