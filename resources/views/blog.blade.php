<x-layouts.plantillaApp 

    title="blog" 
    meta-description="este es el contenido de la descripcion de blog" 
    
    >

    {{-- <x-slot name="title">
       home 
        poner el title a la pagina
    </x-slot> --}}

    <h1>blog</h1>    


    {{-- Mostrar los datos que viene desde el controlador accediendo a la variable del vector
         que los tiene dentro de la url en este caso   posts y acedemos al nombre del valor que queremos mostrar 
         en este caso title --}}

         {{-- utilizamos las etiquestas de blade {{}}  dentro de una vista de codigo html pero con extension 
         .blade.php , lo que hacen esas etiquetas es permitir agregar codigo php de forma mas segura ya que se 
         podria hacer con php puro echo $miVariable[''] pero permitiria codigo malicioso o script dentro del navegador 
         ya que las etiquetas de blade {{}} no lo permitiran  {{$miPost['title']}}--}}



    @foreach ($posts as $miPost) 
        <h3>{{$miPost->nombreJugador}})</h3>

    @endforeach


</x-layout>

