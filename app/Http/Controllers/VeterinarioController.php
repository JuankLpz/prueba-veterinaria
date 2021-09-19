<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veterinario;
class VeterinarioController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }
    public function index(){
        $veterinarios= Veterinario::paginate();
        return view('layouts.veterinarios',compact('veterinarios'));
    }

    public function create(){
        return view('veterinarios.create');
    }
    
    public function store(Request $request){
        $this->validate($request,
                        ['name' => 'required',
                        'especialidad' => 'required',
                        ]
                    );
        $veterinario =new Veterinario();
        $veterinario->name=$request->name;
        $veterinario->especialidad= $request->especialidad;
        $veterinario->save();
                    
        return redirect()->route('veterinarios');
    }
    public function edit(Veterinario $veterinario){
      
        return view('veterinarios.edit', compact('veterinario'));
       
    }
    public function update(Request $request, Veterinario $veterinario){
        $this->validate($request,
        ['name' => 'required',
        'especialidad' => 'required',
        ]
    );
        $veterinario->name=$request->name;
        $veterinario->especialidad=$request->especialidad;
        $veterinario->save();
        return redirect()->route('veterinarios');
       
    }
    public function destroy(Veterinario $veterinario){
        $veterinario->delete();
        return redirect()->route('veterinarios');
       
    }

}