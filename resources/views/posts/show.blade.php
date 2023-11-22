
<x-layouts.plantillaApp 

    :title="$elId->nombreTitulo" 
    :meta-description="$elId->body" 
>
    {{-- al agregar los dos puntos :  dentro de un apuntador se estaria evaluando el contenido php --}}


    <main class=" h-80 flex justify-center items-center ">
        <div class=" bg-zinc-50 w-1/3 h-72 rounded">
           
                <h2 class="text-center mt-2 text-lg text-black font-semibold "> Vista show</h2>

            
        
            <div class="flex  items-center flex-col w-full">
                <div class=" border-b-2 border-solid border-black w-64 h-10 flex items-end justify-center text-base text-red-500 font-semibold">
                    <h3>{{$elId->nombreTitulo}}</h3>

                </div>
                <textarea class=" border-2 border-solid border-black mt-10 w-80 h-36  text-base p-3 text-red-500 font-semibold rounded resize-none" disabled >{{$elId->body}} 
                </textarea>



               
            </div>

          
        
            {{-- <a href="{{route("blog")}}">Regresar</a> --}}
            <div class="pl-5">
                <a href="/blog" class="underline">Regresar</a>

            </div>
        </div>

    </main>  

</x-layout>