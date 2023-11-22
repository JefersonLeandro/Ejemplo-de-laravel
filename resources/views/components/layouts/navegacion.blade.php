{{-- ¿Qué es un guard en Laravel?

Laravel introduce módulos que se componen de «guards» y «providers»
 Los guards definen la autenticación del usuario para cada solicitud,
  y los providers definen la recuperación del usuario desde un almacenamiento
   persistente (por ejemplo, una base de datos MySQL ) --}}

<nav class="w-screen overflow-scroll bg-white border-b dark:bg-slate-900 border-slate-900/10 lg:px-8 dark:border-slate-300/10 lg:mx-0">
    <div class="px-4 mx-auto max-w-7xl sm:px-16 lg:px-20">
        <div class="relative flex items-center justify-between h-16">
            <div class="flex items-center justify-center flex-1 sm:items-stretch sm:justify-start">
                <div class="flex items-center flex-shrink-0">
                    <a href="{{ route("welcome") }}" class=" flex gap-1 ">
                        <svg class="w-8 h-8 text-sky-500" style=" color : rgb(215, 93, 93);"fill="none" width="0" stroke="currentColor"
                         viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                            </path>
                        </svg>
                        <strong class="flex items-center">Ejemplo Laravel</strong>

                    </a>
                </div>
                <div class="mx-auto" >
                    <div class="flex space-x-4">
                        <a href="{{ route("welcome") }}" class="px-3 py-2 text-base font-medium rounded-md hover:text-sky-600 dark:hover:text-text-sky-600 {{request()->routeIs("welcome") ? 'text-pink-600' : 'text-slate-400'}} ">
                            Welcome
                        </a>
                        <a href="{{ route("posts.index") }}" class="px-3 py-2 text-base font-medium rounded-md hover:text-sky-600 dark:hover:text-text-sky-600 {{request()->routeIs("posts.*") ? 'text-pink-600' : 'text-slate-400'}} ">
                            Blog
                        </a>
                        <a href="{{ route("about") }}" class="px-3 py-2 text-base font-medium rounded-md hover:text-sky-600 dark:hover:text-text-sky-600 {{request()->routeIs("about") ? 'text-pink-600' : 'text-slate-400'}}">
                            About
                        </a>
                        <a href="{{ route("contact") }}" class="px-3 py-2 text-base font-medium rounded-md hover:text-sky-600 dark:hover:text-text-sky-600 {{request()->routeIs("contact") ? 'text-pink-600' : 'text-slate-400'}}">
                            Contact
                        </a>
                        <a href="{{ route("bootstrap") }}" class="px-3 py-2 text-base font-medium rounded-md hover:text-sky-600 dark:hover:text-green-500 {{request()->routeIs("bootstrap") ? 'text-pink-600' : 'text-slate-400'}} ">
                            Bootstrap
                        </a>
                       
                    </div>
                </div>
                    {{-- todo lo que este dentro guest se muestra para usuarios no autenticados.  --}}
                    @guest 
                    
                        <a href="{{ route("auth.registro") }}" class="px-2 py-2 text-base font-medium rounded-md hover:text-sky-600 dark:hover:text-green-500 {{request()->routeIs("auth.registro") ? 'text-pink-600' : 'text-slate-400'}} ">
                            
                            Registro
                        </a>
                        <a href="{{ route("auth.login") }}" class="px-2 py-2 text-base font-medium rounded-md hover:text-sky-600 dark:hover:text-green-500 {{request()->routeIs("auth.login") ? 'text-pink-600' : 'text-slate-400'}} ">
                            
                            Login
                        </a>
                             {{-- @else cuando si esta autenticado  sirve para @guest y para @auth tambien    

                                 <span>cerrar session</span> --}}
                    @endguest

                    {{-- cuando esta autenticado se puede utilizar auth  --}}
                    @auth
                        
                        <form action="{{route("logout")}}" method="POST" class="">
                            {{-- <a href="">{{Auth::user()->name}}</a> --}}
                            @csrf
                            <button class="cursor-pointer px-2 py-2 text-base font-medium rounded-md hover:text-sky-600 dark:hover:text-green-500 ">Cerrar session</button>

                            {{-- en vez de hacer la accion con un button tambien se puede hacer con a hreft o link por medio de un onclick donde se acede al formulario mas cercano osea este y hace un submit--}}
                                {{-- <a href="#" onclick="this.closest('form').submit()" class="cursor-pointer px-2 py-2 text-base font-medium rounded-md hover:text-sky-600 dark:hover:text-green-500 ">
                                    cerrar s
                                </a> --}}

                        </form>
                    @endAuth

            </div>
        </div>
    </div>
</nav>



