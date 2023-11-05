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
        return view("blog" , ['posts' => $posts]);// primer parametro el nombre de la vista , segundo los datos que retornar o enviar a la vista


    }




}
