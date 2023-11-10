<?php

namespace App\Http\Controllers;

use App\Models\Titulo;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class controladorPost extends Controller{
        

    public function __invoke(){ // se utliza cuando tenemos solo metodo ejecutar o sola una accion 

       //

    }


    public function index() { // para mostrar listado de datos 
        
        // $posts= DB::table("titulo")->get(); // obtener los datos directamente de la bd 
        $posts=Titulo::get(); // utilizar un modelo para traer los datos
        return view("posts.index" , ['posts' => $posts]);// primer parametro el nombre de la vista , segundo los datos que retornar o enviar a la vista


    }

    public function show($miPost){ // en este caso como ruta envia  una varible ya solo es definir otra para recibir el aca y ya. 

        // $miId = Titulo::findOrFail($miPost); // el orFail significa que no hay id que exita manda la vista de error 404 en vez de dejarla vicia
        //  dd($miPost." valor entranda", $miId->id." valor encontrado con id");
        // return view("posts.show",['miPost'=>$miPost]);
        // return $miId."esto es navidad";
        // porque no me deja instanciar directamente de la clase el id, puede ser que me falte algo 

        // return  Titulo::findOrFail($miPost);
        // return ;
        
        $unID = Titulo::findOrFail($miPost);
        return view("posts.show", ['elId' => $unID]); 

    }   


    public function create() {

        return view("posts.create");
    }

    public function store(Request $request) {// utilizado para almacenar datos 


        // return request(); ver los datos que trae la solicitud - igualmente imprimir la variable de $request
        // se puede aceder con el nombre del name solamente o con input("name");

        $request->validate([

            "fTitulo"=>['required', 'min:4', 'max:45'] ,  
            "fDescripcion"=> ['required','min:20', 'max:255']
            
        ]);
        // ],[

        // para modificar un mensaje 'fTitulo.required' =>' un mensaje diferente :attribute'

        // ]);


        $dato = new Titulo; // eloquen 
        $dato->nombreTitulo = $request->input("fTitulo");
        $dato->body = $request->fDescripcion;
        $dato->save();

        // return $request->input('fTitulo'); 
        // para simplificar el codigo y de el mismo resultado con el redirect con route exite un metodo que ya hace el redirecionamiento to_route
        // return redirect()->route("posts.index"); 
        
        session()->flash("estado","-Post creado-");// crear un mensaje o estado de una sola peticion o recargo .

        return to_route("posts.index");// se redirecciona a nueva ruta 

    }
}