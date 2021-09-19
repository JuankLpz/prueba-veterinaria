<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citas;

class HomeController extends Controller
{
    public function index(){
        $citas= Citas::orderBy('date','asc')->paginate();
        return view('welcome',compact('citas'));
    }

}
