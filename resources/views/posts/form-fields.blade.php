    
    
    @csrf 
    <label for="titulo">El titulo</label>
    <br>

    @error('nombreTitulo')
        <small style="color: red;">{{$message}}</small>
    <br>
    <br>
    @enderror

    <input type="text" name="nombreTitulo" value="{{ old("nombreTitulo" , "$datos->nombreTitulo") }}">
    <br>
    <label for="body" >La descripcion</label>
    <br>

    @error('body')
            <small style="color: red;  ">{{$message}}</small>
        <br>
        <br>
    @enderror


    <textarea name="body" id="" cols="30" rows="10">{{old("body",$datos->body)}}</textarea>
    <br>
