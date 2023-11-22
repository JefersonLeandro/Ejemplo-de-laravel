<x-layouts.plantillaApp 

    title="create-post" 
    meta-description=" descripcion de crear post" 
>


<div class=" flex justify-center ">
    <div  class=" w-1/3">
        <div class=" w-64 text-start font-mono bg-zinc-50 h-16 mt-2 flex items-center  rounded px-2">
        
            <h2  class=" text-red-500 text-3xl    "> Editar un post</h2>
        </div>

    </div>

</div>
{{-- @dump($datos->toArray()) ver datos dentro de un vector  --}}

<form action="{{route("posts.update",$datos)}}" method="POST">

    @method("patch")

   
    @include('posts.form-fields')
   
    <div class=" flex justify-center h-14 items-center font-mono" >
        <div class=" w-1/3 h-9 flex  justify-between">
            
            <a href="{{route("posts.index")}}" class="text-lg  hover:underline">
                Regresar
            </a>
            <div class= "bg-zinc-50 h-full w-32 rounded flex items-center justify-center text-lg  ">
                <button>
                    
                </button>
                <button type="submit" class="text-red-500">
                    <strong>Modificar</strong>
                </button>
            </div>

        </div>
    </div>

</form>




</x-layouts.plantillaApp>