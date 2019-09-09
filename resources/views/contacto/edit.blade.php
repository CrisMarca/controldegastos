@extends('layout.layouts')

@section('content')
    <form action="/contactos/{{$datos->id}}" method="POST">    
        @method('PUT')
        @csrf    
        <h3 class="text-primary">Editar Contacto</h3>
        <p>Ingrese su nombre : </p>
        <input type="text" class="form-control" name="nombre" value="{{$datos->nombre_contacto}}">
        <p>Ingrese su apellido : </p>
        <input type="text" class="form-control" name="apellido" value="{{$datos->apellido_contacto}}">
        <p>Ingrese su edad : </p>
        <input type="date" class="form-control" name="edad" value="{{$datos->fecha_de_nacimiento}}">        
        <p>Ingrese su numero de celular : </p>
        <input type="text" class="form-control" name="celular" value="{{$datos->numero_contacto}}"><br>
        <button type="submit" class="btn btn-primary">Actualizar Contacto</button>
        <a class="btn btn-info mr-1" href="/contactos">Regresar</a>        
    </form>
    
@endsection