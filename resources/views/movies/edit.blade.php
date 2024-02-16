@extends('plantilla')

@section('titulo', 'Actualizar')

@section('contenido')
    <div class="content">
        <h1>Actualizar Pelicula</h1>
        <form action="{{route('peliculas.update', $pelicula['id'])}}" method="POST">
        @method('PUT')
        @csrf
            <div class="form-group">
                <label for="title">Título:</label>
                <input type="text" class="form-control" name="title"id="title" value="{{$pelicula['title']}}">
            </div>

            <div class="form-group">
                <label for="director">Director:</label>
                <input type="text" class="form-control" name="director"id="director" value="{{$pelicula['director']}}">
            </div>

            <div class="form-group">
                <label for="year">Año:</label>
                <input type="text" class="form-control" name="year"id="year" value="{{$pelicula['year']}}">
            </div>

            <div class="form-group">
                <label for="rented">Rentado:</label>
                <input type="number" class="form-control" name="rented"id="rented" value="{{$pelicula['rented']}}">
            </div>

            <div class="form-group">
                <label for="synopsis">Sinopsis:</label>
                <input type="text" class="form-control" name="synopsis"id="synopsis" value="{{$pelicula['synopsis']}}">
            </div>

            <div class="form-group">
                <label for="imagen">Imagen:</label>
                <input type="text" class="form-control" name="imagen"id="imagen" placeholder="Introduce url de la imagen" value="{{$pelicula['poster']}}">
            </div>

            <input type="submit" name="enviar" value="Enviar" class="btn btn-dark btn-block">
        </form>
    </div>

@endsection