<x-layouts.plantillaApp

title="registro" 
meta-description="este es el contenido de la descripcion de registro" 
>

    <main class="w-full  flex items-center justify-center h-screen  ">

        <div class="bg-zinc-50  w-1/3 h-5/6 rounded  ">
            <div class=" pl-10 h-16 flex  items-center  mt-3 ">
                <h1 class="text-center text-red-600 my-4 text-4xl  " >Registro</h1>

            </div>
            <form action="{{route("auth.registrar")}}" method="POST">
            {{-- falsicacion de peticion en sitios cruzados - csrf  este token tiene una duracion de dos 
                horas y volvera a retonar pagina expirada solo hay que volver y recargar el fomulario para 
                refrescare el token     --}}
                
                {{-- @include('posts.form-fields') --}}

                @csrf
                <div class="flex w-full  justify-center  h-96">
                    <div class="flex flex-col w-96 gap-2 pt-3  h-auto ">
                        <div class=" flex flex-col h-24">

                            <label for="" class="font-semibold ">Nombre</label>
                            <input type="text" class="rounded"  autofocus="autofocus" name="fNombrePersona"  placeholder="Su nombre..." value="{{old("fNombrePersona")}}">
                            {{-- <small class="text-red-500">el campo debe conterner al menos 4 carateres</small> --}}
                            @error('fNombrePersona')
                                <small class="text-red-500">{{$message}}</small>
               
                            @enderror

                        </div>
                        <div class="flex flex-col h-24">
                            <label for="" class="font-semibold ">Email</label>
                            <input type="email" class="rounded" name="fEmailPersona" placeholder="Su email... " value="{{old("fEmailPersona")}}">
                            {{-- <small class="text-red-500">el campo debe conterner al menos 4 carateres</small> --}}
                            @error('fEmailPersona')
                            <small class="text-red-500">{{$message}}</small>
           
                        @enderror
                        </div>
                        <div class="flex flex-col h-24">
                            <label for="" class="font-semibold ">Contraseña</label>
                            <input type="password" class="rounded"  name="fPassword"placeholder="Su contrasena.. " >
                            {{-- <small class="text-red-500">el campo debe conterner al menos 4 carateres</small>  --}}
                            @error('fPassword')
                                <small class="text-red-500">{{$message}}</small>
           
                            @enderror
                        </div>
                        <div class="flex flex-col h-24">
                            
                            <label for="" class="font-semibold ">Confirmar contraseña</label>
                            <input type="password" class="rounded" name="fPassword_confirmation" placeholder="Confirme su contrasena... " value="">
                            {{-- <small class="text-red-500">el campo debe conterner al menos 4 carateres</small> --}}
                            @error('fPassword_confirmation')
                            <small class="text-red-500">{{$message}}</small>
           
                            @enderror
                        </div>
                    </div>

                </div>

                <div class="h-10  w-full flex items-center justify-center flex-col  gap-1 ">
                    <div class="flex gap-2 justify-start  w-96 items-center">
                        <input type="checkbox" required class="cursor-pointer">
                        <span>Aceptar terminos y condiciones</span>
                    </div>
                </div>
                <div class="h-16 flex flex-col items-center justify-center">

                    <span class="cursor-pointer hover:underline">¿Olvido su contrasena?</span>
                    <a class="cursor-pointer hover:underline" href="{{route("auth.login")}}">Iniciar sesion</a>
                </div>
                

                <div class="flex justify-center h-14 items-center " >
                    <div class="  w-5/6 h-9 flex  justify-between  gap-5">
                        
                        <a href="{{route("posts.index")}}" class="text-lg hover:underline">
                            Regresar
                        </a>
                        <div class= " h-auto w-32 rounded flex items-center justify-center text-lg   ">
                            
                            
                            <button class="bg-white   text-red-600  py-2 px-4 border border-gray-800 rounded shadow hover:shadow-black">
                                
                                <strong>Registrar</strong>
                            </button>
                           
                        </div>
        
                    </div>
                </div>
            </form>
    
        </div>
    </main>




</x-layouts.plantillaApp>