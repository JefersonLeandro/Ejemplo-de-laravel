<?php

use App\Http\Controllers\controladorPost;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// rutas prederterminadas con get 
// reciben dos parametros la direccion que acede el usuario por medio de ella , esa misma puede cambiar
// y no pasa nada ya que lleva otro parametro para la vista y la vista a donde lo queire llevar tambien pueden 
//llevar un name 




//Notas 


// al utlizar un controlador para las rutas es  una buena practica cuando se tiene aplicaciones robust
// igualmente si se quiere utilizar un controlador, se puede usar pasar el nombre del archivo directamente en la misma ruta




//Rutas 
Route::view("/","welcome")->name("welcome");




Route::get("/blog",[controladorPost::class,'index'])->name("blog");
// Route::get("nombre url cualquiera o igual ",[nombreControlador,'nombre del metodo a utlizar'])->name("nombre de toda la ruta");
// Route::view("/blog","blog",["posts"=>$posts])->name("blog");


Route::view("/contact","contact")->name("contact");
Route::view("/acercaDe","about")->name("about");

