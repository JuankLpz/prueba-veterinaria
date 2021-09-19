<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;
        //one2Many veterinario y citas inversa
        public function citas(){
            return $this->hasMany('App\Models\Citas');
        }
}
