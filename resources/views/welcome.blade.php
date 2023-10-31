



<!-- para aceder a las rutas con php puro : < ?=route("about")?>  pero dejarlas asi permite ataques de injeccion-->
<!-- para aceder a las rutas con blade : { { route("about")}}  no permite ataques de injeccion-->
<!-- para aceder a las rutas con blade injectando html: { !! route("about")!!}  -->
@extends('layouts.app')

@section('contenido')

    <h1>welcome</h1>    

@endsection

