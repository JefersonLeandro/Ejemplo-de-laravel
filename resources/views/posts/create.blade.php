<x-layouts.plantillaApp 

    title="create-post" 
    meta-description=" descripcion de crear post" 
>


<h2> crear un post</h2>

    <form action="{{route("posts.store")}}" method="POST">
        {{-- falsicacion de peticion en sitios cruzados - csrf  este token tiene una duracion de dos 
            horas y volvera a retonar pagina expirada solo hay que volver y recargar el fomulario para 
            refrescare el token     --}}
        @csrf 

            <label for="titulo">El titulo</label>
            <br>
        @error('fTitulo')

       
            <small style="color: red;">{{$message}}</small>
        <br>
        <br>
        @enderror
            
     

        <input type="text" name="fTitulo" value="{{ old("fTitulo") }}">
        <br>
        <label for="body" >La descripcion</label>
        <br>

        @error('fDescripcion')
                <small style="color: red;  ">{{$message}}</small>
            <br>
            <br>
        @enderror


       <textarea name="fDescripcion" id="" cols="30" rows="10">{{old("fDescripcion")}}</textarea>
       <br>

        <button type="submit">Enviar</button>

    </form>



<a href="{{route("posts.index")}}">Regresar</a>


</x-layouts.plantillaApp>