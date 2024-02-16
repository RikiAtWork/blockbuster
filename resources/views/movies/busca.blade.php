@extends('plantilla')

@section('titulo', 'Peliculas')

@section('contenido')
  <h1>Peliculas de {{$nombreDirector}}</h1>

  <ul>
    @foreach ($peliculas as $pelicula)
      <li>{{$pelicula['title']}}</li>
    @endforeach
  </ul>

@endsection