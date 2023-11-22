<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegistredUserController extends Controller
{
    
    

    public function store(Request $request ){
        
        // dd($request);
        // return $request->toArray();


        $request->validate([

            
            "fNombrePersona"=>['required', 'string', 'max:255'],
            "fEmailPersona"=>['required', 'string', 'email' , 'max:255' , 'unique:users,email'],// dentro del unique esta haciendo la verificacion de dos usuario con el mismo email ,el segundo parametro se le indica el la columna que tiene el email y si no se le pasa toma por defecto la que trae el input
            "fPassword"=>['required', 'string', 'confirmed:fPassword_confirmation','max:255',Rules\Password::defaults()] 

        ]);

        
        $user = User::create([

            "name" =>$request->fNombrePersona,
            "email" => $request->input("fEmailPersona"),
            "password" => bcrypt($request->fPassword),// el metodo bcrypt supongo que es el mismo 
            //de la libreria bcryp tambien se puede incriptar con Hash::make
        ]);

        // Auth::login($user); // es para autenticar el usuario por medio de metodo login 
        return to_route("auth.login")->with('estado','Registro exitoso !');
        //registrar datos 
        
    }
}
