<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){

        return view('auth.login');
    }
    public function store(Request $request){
        $this->validate($request,[
            'email'=>'required|email',
            'password' => 'required']
        );

        if(!auth()->attempt($request->only('email','password')))
            return back()->with('status','Credenciales no validas');
        else
            return redirect()->route('home');
    }
}
