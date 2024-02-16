@extends('plantilla')

@section('titulo', 'crear')

@section('contenido')
    <div class="content">
        <h1>Nueva Pelicula</h1>
        <form action="{{route('peliculas.store')}}" method="POST">
        @csrf
            <div class="form-group">
                <label for="title">Título:</label>
                <input type="text" class="form-control" name="title"id="title">
            </div>

            <div class="form-group">
                <label for="director">Director:</label>
                <input type="text" class="form-control" name="director"id="director">
            </div>

            <div class="form-group">
                <label for="year">Año:</label>
                <input type="text" class="form-control" name="year"id="year">
            </div>

            <div class="form-group">
                <label for="rented">Rentado:</label>
                <input type="number" class="form-control" name="rented"id="rented">
            </div>

            <div class="form-group">
                <label for="synopsis">Sinopsis:</label>
                <input type="text" class="form-control" name="synopsis"id="synopsis">
            </div>

            <div class="form-group">
                <label for="imagen">Imagen:</label>
                <input type="text" class="form-control" name="imagen"id="imagen" placeholder="Introduce url de la imagen">
            </div>

            <input type="submit" name="enviar" value="Enviar" class="btn btn-dark btn-block">
        </form>
    </div>

@endsection