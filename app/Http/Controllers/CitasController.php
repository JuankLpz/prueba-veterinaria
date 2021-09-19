<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citas;
use App\Models\Veterinario;

class CitasController extends Controller
{
    public function index(){
        $citas= Citas::all();
        return view('layouts.agenda',compact('citas'));
    }
    public function create(){
        $veterinarios= Veterinario::all();
        return view('agenda.create',compact('veterinarios'));
    }
    public function store(Request $request){
      
        $this->validate($request,
                        ['date' => 'required',
                        'time' => 'required',
                        'veterinario' => 'required',
                        'descripcion' => 'required',
                        ]
                    );
        $cita =new Citas();
        $cita->date=((string)$request->date)." ".((string)$request->time).":00";
        $cita->veterinario_id=$request->veterinario;
        $cita->descripcion=$request->descripcion;
        $cita->agenda_id=1;
        $cita->save();
                    
        return redirect()->route('agenda');
    }
    
}
