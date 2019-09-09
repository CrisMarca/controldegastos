@extends('layout.layouts')

@section('content')       
    <ul class="nav bg-primary p-1">
        <li class="nav-item mr-1">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Contactos
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    @foreach ($datos as $contacto)
                        <a class="dropdown-item" href="{{ url('/contactos/'.$contacto->id) }}">{{$contacto->nombre_contacto}}</a>
                    @endforeach                    
                </div>
            </div>
        </li>
        <li class="nav-item mr-1">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ingresos
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    @foreach ($datos as $contacto)
                        <a class="dropdown-item" href="#">{{$contacto->nombre_contacto}}</a>
                    @endforeach                    
                </div>
            </div>
        </li>
        <li class="nav-item mr-1">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Gastos
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    @foreach ($datos as $contacto)
                        <a class="dropdown-item" href="#">{{$contacto->nombre_contacto}}</a>
                    @endforeach                    
                </div>
            </div>
        </li>
    </ul>    
    @if(Session::has('flash_message')) 
        <p class="alert alert-info">
            {!! session('flash_message') !!}
        </p>
    @endif 
@endsection