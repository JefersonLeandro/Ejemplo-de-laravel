<x-layouts.plantillaApp 

    title="create-post" 
    meta-description=" descripcion de crear post" 
>


<h2> crear un post</h2>

    <form action="{{route("posts.store")}}" method="POST">
        {{-- falsicacion de peticion en sitios cruzados - csrf  este token tiene una duracion de dos 
            horas y volvera a retonar pagina expirada solo hay que volver y recargar el fomulario para 
            refrescare el token     --}}
       
        @include('posts.form-fields')

        <button type="submit">Enviar</button>
    </form>



<a href="{{route("posts.index")}}">Regresar</a>


</x-layouts.plantillaApp>