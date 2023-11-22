<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta  name="descripcion" content="{{$metaDescription ?? 'descripcion por defecto' }}" > 
    <title>{{$title ??''}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
 

    
    {{-- <link rel="stylesheet" href="/css/style.css">
    
    <script src="/js/miJavaScript.js" ></script> --}}
</head>
<body> 






    {{-- @include('components.layouts.navegacion')  eso de atras es igual a esto :  <x-layouts.navegacion/>--}}
    {{-- @yield('contenido')/ --}}
    {{-- este slot es una variable vacia como si fuera el yield y para aceder a los otros atributos con los names --}}
    {{-- camekais para definir , crear , poner una propiedad  --}}
    {{-- kebab case para referenciar o acceder  --}}
    {{-- el apuntador de navegacion no lleva nada en este caso se cierra ahi mismo  --}}
    <x-layouts.navegacion/>

    @if (session("estado"))
   


        <div class="bg-white border-t border-b border-red-500 text-amber-500 px-4 py-3" role="alert">
            <p class="font-bold text-red-500">{{session('estado')}}</p>
            <p class="text-sm text-red-400">accion realizada correctamente</p>
        </div>
        
    @endif

    {{$slot}}




</body>
</html>