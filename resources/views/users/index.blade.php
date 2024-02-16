@extends('plantilla')

@section('titulo', 'Usuarios')

@section('contenido')
    <div class="content2">
    <form action="{{route("movies.index")}}">
            <div class="form-group">
                <label for="usuario">Usuario:</label>
                <select name="usuario" id="usuario" class="form-control">
                @foreach($usuarios as $usuario)
                    <option value="{{$usuario['id']}}">{{$usuario['name']}}</option>
                @endforeach
                </select>
            </div>

            <input type="submit" name="enviar" value="Enviar" class="btn btn-dark btn-block">
    </form>
    </div>
@endsection