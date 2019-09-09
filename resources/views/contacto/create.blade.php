@extends('layout.layouts')

@section('content')
    <form action="/contactos" method="POST">
        @csrf
        <h3 class="text-primary">Registro de contacto</h3>
        <p>Ingrese su nombre : </p>
        <input type="text" class="form-control" name="nombre">
        <p>Ingrese su apellido : </p>
        <input type="text" class="form-control" name="apellido">
        <p>Ingrese su edad : </p>
        <input type="date" class="form-control" name="edad">        
        <p>Ingrese su numero de celular : </p>
        <input type="text" class="form-control" name="celular"><br>
        <button type="submit" class="btn btn-primary">Guardar Contacto</button>
    </form>
    
@endsection