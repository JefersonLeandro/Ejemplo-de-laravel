<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use  Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

   class AuthenticatedSessionController extends Controller
{


   
    public function store(Request $request){


        // return  $request->toArray();
        //tener en cuenta el input de tipo check
        // dd($request->boolean('fRemember'));
        // return $request->toArray();//los campos son con f 
        // return  $request->toArray();
        //Auth::attempt recibe email y password para ser verificadas, por parte de password
        //lo hace con la libreria bycrip de manera internamente y me imagino que lo mismo para el email donde haiga un email ya registrado o igual a ese 
        // si son corretas devuelve true y si son falsas devuelve false y como segundo parametro le pasamos el token de remenber denpendiendo de ser false o true
        
        
        
                
        $credenciales = $request->validate([
            
            "email"=>['required', 'string', 'email' , 'max:255' ],// dentro del unique esta haciendo la verificacion de dos usuario con el mismo email ,el segundo parametro se le indica el la columna que tiene el email y si no se le pasa toma por defecto la que trae el input
            "password"=>['required', 'string','max:255'],
            
        ]);
        
        if  ( !Auth::attempt($credenciales , $request->boolean('fRemember')) ){
            //credenciales incorretas
        
            throw ValidationException::withMessages([//capturamos el error por medio de throw
            
                    "email" =>__("auth.failed")//pasamos un mensaje de la regla failed
            
            ]);
            
        }
                


        //credenciales correctas
        
        $request->session()->regenerate();//regenerar el token o el identificador de la session osea cambia el antiguo por uno nuevo 

        return redirect()->intended()->with('estado','Bienvenido, has iniciado sesion!');// el metodo intended redirecciona a la raiz o osea al home 


    }



    public function destroy(Request $request ) {

         
        // Al regenerar el token, se emite un nuevo token CSRF y se actualiza en la sesión del usuario. Esto es importante para evitar que un atacante utilice un token antiguo en un intento de realizar una solicitud maliciosa.

        Auth::guard('web')->logout();//se cierra el guard de web o la session que se inicio en en los componentes web y de paso cierra la session invalidados los mismos datos osea borrandolos. 

        $request->session()->invalidate();//invailda la session  de manera forsoza este autenticado o no 

        $request->session()->regenerateToken();//se regenera el token csrf (Cross-Site Request Forgery) a nuevo  
        return to_route('login')->with('estado' ,'Session finalizada');


    } 

}
