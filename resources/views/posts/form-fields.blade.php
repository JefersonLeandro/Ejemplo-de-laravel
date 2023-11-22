    
    
    @csrf 
    <div class="flex justify-center ">
        <div class="font-mono rounded  bg-zinc-50 h-64 flex items-center flex-col  mt-2 w-1/3">

            <div class="w-full  h-20 ">
                @error('nombreTitulo')
                    <div class="text-center h-3">
                    
                        <small style="color: red;">{{$message}}</small>
                        
                    </div>
                @enderror
                <div class=" text-start  w-full h-20 flex items-center pl-10 gap-7" >
                    <label for="titulo" class="text-base">
                        <strong>Titulo</strong>    
                    </label>
                    
                    <div class="w-full">
                        
                        <input type="text" class=" focus:outline-none p-2 bg-pink-100 border-1 border-solid border-red-400 rounded w-80 flex flex-col" 
                        name="nombreTitulo" placeholder=" Un titulo..." value="{{ old("nombreTitulo" , "$datos->nombreTitulo") }}">

                        
                    </div>
                </div>
         </div>


         <div class="  w-full text-end flex flex-col justify-center h-40 pr-7   ">
            
            <div class="pr-6 h-8 flex justify-end items-center  ">
                <label for="body" class="">
                   <strong> Descripcion</strong> 
                </label>

            </div>
            

            
            <div class="">
                <textarea  class="focus:outline-none bg-pink-100 h-28 w-96 border-1 border-red-400 border-solid  rounded p-2" name="body" id="" cols="45" rows="5" placeholder="Una descripcion..." >{{old("body",$datos->body)}}</textarea>
                
            </div>
            @error('body')
                    <small style="color: red;  ">{{$message}}</small>
               
            @enderror
            
         </div>

        </div>    

    </div>
