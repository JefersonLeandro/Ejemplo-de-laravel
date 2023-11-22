<?php

use App\Http\Controllers\Auth\RegistredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
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

// Route::get("nombre url cualquiera o igual ",[nombreControlador,'nombre del metodo a utlizar'])->name("nombre de toda la ruta");
// Route::view("/blog","blog",["posts"=>$posts])->name("blog");

// Route::get("/miLogin",[function () {

//     return " pagina login";
// }])->name("login");

// el metodo show es para mostrar los detalles de algo miestran el index es para mostrar un listado

Route::view("/","welcome")->name("welcome");
Route::view("/contact","contact")->name("contact");
Route::view("/acercaDe","about")->name("about");
Route::view("/irABootstrap","bootstrap")->name("bootstrap");
// 7 metodos rest 
// Route::get("/blog",[controladorPost::class,'index'])->name("posts.index");// mostrar el listado de posts
// Route::get("/blog/{dato}",[controladorPost::class,'show'])->name("posts.show");  // mostrar los detalles de un post
// Route::get("/blog/create",[controladorPost::class,'create'])->name("posts.create");// mostrar y crear un post dentro de formulario
// Route::post("/blog",[controladorPost::class,'store'])->name("posts.store"); // para almacenar valores o datos en la base de datos
// Route::get("/blog/{dato}/editar",[controladorPost::class,'edit'])->name("posts.edit");//mostrar y editar el formulario 
// Route::patch("/blog/{dato}",[controladorPost::class,'update'])->name("posts.update");//actualizar los datos en bd, patch para actualizar y put para remplazar 
// Route::delete("/blog/{dato}",[controladorPost::class,'destroy'])->name("posts.destroy"); // para eliminar un post

//routes for the login or sessions
Route::view("/registro" ,"auth.registro" )->name("auth.registro");//ir al registro
Route::Post("/registrar" ,[RegistredUserController::class,'store'] )->name("auth.registrar");//registrar datos dentro del metodo store      

Route::view("/login" ,"auth.login" )->name("auth.login");//ir al login
Route::Post("/login" ,[AuthenticatedSessionController::class,'store'] )->name("login");//registrar datos dentro del metodo store      

Route::Post("/logout" ,[AuthenticatedSessionController::class,'destroy'] )->name("logout");//cerrar session

Route::resource('blog', controladorPost::class,[
    'names'=> 'posts',// al estar los names en blog de la url se le espefican que seran posts
    'parameters' => ['blog' => 'dato'] // igualmente los parametros se cambia
]);

// Post
