<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta  name="descripcion" content="{{$metaDescription ?? 'descripcion por defecto' }}" > 
    <title>{{$title ??''}}</title>
</head>
<body> 






    {{-- @include('components.layouts.navegacion')  eso de atras es igual a esto :  <x-layouts.navegacion/>--}}
    {{-- @yield('contenido')/ --}}
    {{-- este slot es una variable vacia como si fuera el yield y para aceder a los otros atributos con los names --}}
    {{-- camekais para definir , crear , poner una propiedad  --}}
    {{-- kebab case para refenciar o acceder  --}}
    {{-- el apuntador de navegacion no lleva nada en este caso se cierra ahi mismo  --}}
    <x-layouts.navegacion/>

    @if (session("estado"))
    <div class="estado">

        <strong>{{session('estado')}}</strong> 

    </div>
        
    @endif

    {{$slot}}




</body>
</html>