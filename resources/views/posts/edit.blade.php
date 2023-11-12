<x-layouts.plantillaApp 

    title="create-post" 
    meta-description=" descripcion de crear post" 
>


<h3>formulario de edicion</h3>

{{-- @dump($datos->toArray()) ver datos dentro de un vector  --}}

<form action="{{route("posts.update",$datos)}}" method="POST">

    @method("patch")

   
    @include('posts.form-fields')
   
    <button type="submit">Enviar</button>

</form>




</x-layouts.plantillaApp>