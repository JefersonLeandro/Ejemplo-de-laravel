{{-- *herencia --}}
<!-- para aceder a las rutas con php puro : < ?=route("about")?>  pero dejarlas asi permite ataques de injeccion-->
<!-- para aceder a las rutas con blade : { { route("about")}}  no permite ataques de injeccion-->
<!-- para aceder a las rutas con blade injectando html: { !! route("about")!!}  -->
{{-- @extends('layouts.app')



{{-- se puede dejar como segundo parametro el valor ya que es solo es texto si fuera html toca dentro del section  --}}
{{-- @section('title','welcome')  --}}
{{-- @section("meta-description","meta-description hosdfsdfsdsdfsdfme") --}}

{{-- @section('contenido') --}}

    {{-- <h1>welcome</h1>     --}}

{{-- @endsection --}}

{{-- *componentes --}}

{{-- en vez de varios yield son slot --}}

{{-- @component('components.layout') --}}
{{-- @endcomponent esto es los mismo que abajo es como includ de la plantilla con componenetes que quiere  --}}


{{-- para aceder a las variables que tiene esa plantilla o la principal se obligadamente atravez de slot y con el atributo name siendo name el atributo al que ser queire aceder  --}}
{{-- la x es un apuntador o apunta a algo   --}}

{{-- en vez de aceder al slot con name de title se puede hacer con atributo directamente el includ este caso seria <x-layouts.plantillaApp title="welcome" --}}
<x-layouts.plantillaApp 

    title="welcome" 
    meta-description="este es el contenido de la descripcion de welcome" 
    
    >

    {{-- <x-slot name="title">
       home 
        poner el title a la pagina
    </x-slot> --}}

    <h1 class="text-center text-pink-600 my-4 text-3xl  ">Welcome</h1>    
    @auth
    {{-- {{Auth::user()}} muestra todos los datos del usuario --}}
        <div class=" container max-width: 640px;">
            
            <pre>
                
                <strong>Usuario autenticado : </strong>{{Auth::user()->name}}
            </pre>
        </div>
    @endauth








</x-layout>




