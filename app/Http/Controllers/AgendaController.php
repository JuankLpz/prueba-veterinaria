<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    //
    public function __construct(){
        $this->middleware(['auth']);
    }
    public function index(){
        $agenda= Agenda::paginate();
        return view('layouts.agenda',compact('agenda'));
    }
}
