<x-layouts.plantillaApp 

    title="blog" 
    meta-description="este es el contenido de la descripcion de blog" 
    
    >

    {{-- <x-slot name="title">
       home 
        poner el title a la pagina
    </x-slot> --}}
    
    <header class="text-center font-mono bg-zinc-50 h-44 flex flex-col items-center mt-2 ">
        <h1 class="text-center text-red-500 my-4 text-3xl ">Blog</h1>    
        @auth
            <button class="bg-red-500 text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">
                <a href="{{route("posts.create")}}">crear un nuevo post</a>
                
            </button>
        @endauth
        @guest
            <span>Inicia session para poder crear un post</span>
        @endguest
    </header>

    
   
    <br>

    {{-- Mostrar los datos que viene desde el controlador accediendo a la variable del vector
         que los tiene dentro de la url en este caso   posts y acedemos al nombre del valor que queremos mostrar 
         en este caso title --}}

         {{-- utilizamos las etiquestas de blade {{}}  dentro de una vista de codigo html pero con extension 
         .blade.php , lo que hacen esas etiquetas es permitir agregar codigo php de forma mas segura ya que se 
         podria hacer con php puro echo $miVariable[''] pero permitiria codigo malicioso o script dentro del navegador 
         ya que las etiquetas de blade {{}} no lo permitiran  {{$miPost['title']}}--}}
         {{-- class="grid w-full gap-4 px-4 max-w-7xl sm:grid-cols-2 md:grid-cols-3 " --}}
    
        <div class="w-ful flex justify-center ">

            
            <main  class="grid w-full gap-4 px-4 max-w-7xl sm:grid-cols-2 md:grid-cols-3 ">
                @foreach ($posts as $dato) 
                
                
                    {{-- <h3>{{$miPost->nombreTitulo }}</h3>  en la parte del id solamente se le puede pasar la variable $miPost ya que el programa se encarga de de obtener el id por si  --}}
                    
                    <div class="max-w-3xl px-4 py-2 space-y-4 bg-white rounded shadow dark:bg-slate-800">
                    
                        <div  class="col-start-3  " >
                            <h3 ><a href="{{route("posts.show",$dato->id)}}">{{$dato->nombreTitulo}}</a></h3>
                            @auth
                            
                            <form action="{{route("posts.destroy",$dato)}}" method="POST">
                                @csrf @method("Delete")
                                
                                
                                <div class="flex justify-between">
                                    <a href="{{ route("posts.edit",$dato)}}" class="underline hover:text-sky-600 text-amber-500">Editar</a>
                                    <button class="rounded w-20 bg-red-300 ">
                                        Eliminar
                                    </button>
                                </div>
                                
                            </form>

                            @endauth
                        </div>
            
                    </div>
            
                @endforeach
            
            </main>
        </div>



</x-layout>

