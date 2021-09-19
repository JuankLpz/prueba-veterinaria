<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    use HasFactory;

    //one2Many veterinario y citas inversa
    public function veterinario(){
        return $this->belongsTo('App\Models\Veterinario');
    }
    //one2Many veterinario y citas inversa
    public function agenda(){
            return $this->belongsTo('App\Models\Agenda');
        }
}
