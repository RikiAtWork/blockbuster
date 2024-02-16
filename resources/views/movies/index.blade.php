@extends('plantilla')

@section('titulo', 'Peliculas')

@section('contenido')
    <form action="{{route('peliculas.create')}}">
        <button type="submit" class="btn btn-light">Insertar</button>
    </form>
    <div class="content">
    @foreach($peliculas as $pelicula)
        <div class="card" style="width: 18rem;">
            <img src="{{$pelicula['poster']}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h4 class="card-title">{{$pelicula['title']}}</h4>
                <h5 class="card-title">{{$pelicula['director']}}</h5>
                <h6 class="card-title">{{$pelicula['year']}}</h6>
                <p class="card-text">{{$pelicula['synopsis']}}</p>
                <form action="{{route('peliculas.edit', $pelicula['id'])}}">
                    @method("PUT")
                    @csrf
                   <button type="submit" class="btn btn-info">Actualizar</button>
                </form>
                <form action="{{route('peliculas.destroy', $pelicula['id'])}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    @endforeach
    </div>


@endsection