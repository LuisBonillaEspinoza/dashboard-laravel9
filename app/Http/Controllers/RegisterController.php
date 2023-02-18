<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(RegisterRequest $request){
        $user = User::create($request->validated());
        return redirect()->route('register.index')->with('success','Se Registro Correctamente');
    }
}
