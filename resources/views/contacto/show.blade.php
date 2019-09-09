@extends('layout.layouts')
@section('content')
    <div class="card">
        <div class="card-header">            
            <h2>Contacto</h2>
        </div>
        <div class="card-body">
            <p>Nombre : {{$datos->nombre_contacto}}</p>
            <p>Apellido : {{$datos->apellido_contacto}}</p>
            <p>Fecha : {{$datos->fecha_de_nacimiento}}</p>
            <p>Numero : {{$datos->numero_contacto}}</p>
        </div>
        <div class="card-footer">
            <div class="row">
                <form action="/contactos/{{$datos->id}}/edit">
                    @method('GET')
                    @csrf
                    <button class="btn btn-primary mr-1">Editar</button>
                </form>
                <form action="/contactos/{{$datos->id}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger mr-1">Eliminar</button>
                </form>
                <a class="btn btn-info mr-1" href="/contactos">Regresar</a>
            </div>
        </div>
    </div>
@endsection