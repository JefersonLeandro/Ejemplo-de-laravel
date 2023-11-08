
<x-layouts.plantillaApp 

    :title="$elId->nombreTitulo" 
    :meta-description="$elId->body" 
>
    {{-- al agregar los dos puntos :  dentro de un apuntador se estaria evaluando el contenido php --}}

    <h2> vista show</h2>

    <h3>{{$elId->nombreTitulo}}</h3>

    <p>{{$elId->body}}</p>

    {{-- <a href="{{route("blog")}}">Regresar</a> --}}
    <a href="/blog">Regresar</a>

</x-layout>