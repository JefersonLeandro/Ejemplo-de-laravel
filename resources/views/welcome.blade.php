



<!-- para aceder a las rutas con php puro : < ?=route("about")?>  pero dejarlas asi permite ataques de injeccion-->
<!-- para aceder a las rutas con blade : { { route("about")}}  no permite ataques de injeccion-->
<!-- para aceder a las rutas con blade injectando html: { !! route("about")!!}  -->
@extends('layouts.app')


{{-- se puede dejar como segundo parametro el valor ya que es solo es texto si fuera html toca dentro del section  --}}
@section('title','welcome') 
@section("meta-description","meta-description home")

@section('contenido')

    <h1>welcome</h1>    

@endsection

