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




// Route::get("nombre url cualquiera o igual ",[nombreControlador,'nombre del metodo a utlizar'])->name("nombre de toda la ruta");
// Route::view("/blog","blog",["posts"=>$posts])->name("blog");


Route::view("/contact","contact")->name("contact");
Route::view("/acercaDe","about")->name("about");
Route::get("/blog",[controladorPost::class,'index'])->name("posts.index");
// el metodo show es para mostrar los detalles de algo miestran el index es para mostrar un listado

Route::get("/blog/create",[controladorPost::class,'create'])->name("posts.create"); 
Route::get("/blog/{elId}",[controladorPost::class,'show'])->name("posts.show"); 
Route::get("/blog/{elId}/editar",[controladorPost::class,'edit'])->name("posts.edit"); 

Route::patch("/blog/{datos}",[controladorPost::class,'update'])->name("posts.update");//patch para actualizar y put para remplazar 


// Post
Route::post("/blog",[controladorPost::class,'store'])->name("posts.store"); // el metodo store es para almacenar valores o datos
