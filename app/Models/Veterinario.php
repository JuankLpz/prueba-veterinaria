<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veterinario extends Model
{
    use HasFactory;

    //one2Many veterinario y citas
    public function citas(){
        return $this->hasMany('App\Models\Citas');
    }
}
