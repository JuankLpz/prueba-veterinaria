<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citas;
use App\Models\Veterinario;

class CitasController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }
    public function index(){
        $citas= Citas::where('estado', '=', TRUE)->get();
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

    public function edit(Citas $cita){
        $veterinarios= Veterinario::all();
        
        return view('agenda.edit', compact('cita','veterinarios'));
       
    }
    public function cancelar(Citas $cita){
        $cita->estado=FALSE;
        $cita->save();
        return redirect()->route('agenda');
    }
    public function update(Request $request, Citas $cita){
        $this->validate($request,
                ['date' => 'required',
                'time' => 'required',
                'veterinario' => 'required',
                'descripcion' => 'required',
                ]
         );
         $cita->date=((string)$request->date)." ".((string)$request->time).":00";
         $cita->veterinario_id=$request->veterinario;
         $cita->descripcion=$request->descripcion;
         $cita->agenda_id=1;
         $cita->save();
        return redirect()->route('agenda');
       
    }


    
}
