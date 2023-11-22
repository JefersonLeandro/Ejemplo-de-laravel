<x-layouts.plantillaApp 

    title="create-post" 
    meta-description=" descripcion de crear post" 
>

<div class=" flex justify-center ">
    <div  class=" w-1/3">
        <div class=" w-60 text-start font-mono bg-zinc-50 h-16 mt-2 flex items-center  rounded px-2">
        
            <h2  class=" text-red-500 text-3xl    "> Crear un post</h2>
        </div>

    </div>

</div>


    <form action="{{route("posts.store")}}" method="POST">
    {{-- falsicacion de peticion en sitios cruzados - csrf  este token tiene una duracion de dos 
        horas y volvera a retonar pagina expirada solo hay que volver y recargar el fomulario para 
        refrescare el token     --}}
        
        @include('posts.form-fields')
        <div class=" flex justify-center h-14 items-center font-mono" >
            <div class=" w-1/3 h-9 flex  justify-between">
                
                <a href="{{route("posts.index")}}" class="text-lg  hover:underline">
                    Regresar
                </a>
                <div class= " h-full w-32 rounded flex items-center justify-center text-lg  ">
                    <button>
                        
                    </button>
                    <button type="submit" class="">
                    </button>
                    <button class="bg-white text-red-500 hover:bg-gray-100  font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                        
                        <strong>Enviar</strong>
                      </button>
                </div>

            </div>
        </div>
    </form>

    





</x-layouts.plantillaApp>