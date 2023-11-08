<x-layouts.plantillaApp 

    title="create-post" 
    meta-description=" descripcion de crear post" 
>


<h2> crear un post</h2>

    <form action="#" method="POST">
        <label for="titulo">El titulo</label>
        <br>
        <input type="text" >
        <br>
        <label for="body">La descripcion</label>
        <br>
       <textarea name="" id="" cols="30" rows="10"></textarea>
       <br>

        <button type="submit">Enviar</button>

    </form>



<a href="{{route("posts.index")}}">Regresar</a>


</x-layouts.plantillaApp>