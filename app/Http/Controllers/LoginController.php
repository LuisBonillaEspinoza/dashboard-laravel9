<?php

namespace App\Http\Controllers;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
//Para validar
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        //Validacion por si estas autenticado
        if(Auth::check()){
            return redirect()->route('home.index');
        }
        return view('auth.login');
    }

    public function login(LoginRequest $request){
         $credenciales = $request->getCredentials();
        
         if(!Auth::validate($credenciales)){
            return redirect()->route('login.index')->withErrors('auth.failed');
         }

         $user = Auth::getProvider()->retrieveByCredentials($credenciales);
         Auth::login($user);

         return $this->authenticated($request,$user);
    }

    public function authenticated(Request $request,$user){
        return redirect()->route('home.index');
    }
}
