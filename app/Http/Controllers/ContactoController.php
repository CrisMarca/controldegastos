<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contacto;
use App\ingreso;
use App\gasto;

use Session;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=contacto::all();
        $datos1=ingreso::all();
        $datos2=gasto::all();
        return view('contacto.index',compact('datos','datos1','datos2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contacto = new Contacto();
        $contacto->nombre_contacto = $request->nombre; 
        $contacto->apellido_contacto = $request->apellido;
        $contacto->fecha_de_nacimiento = $request->edad;
        $contacto->numero_contacto = $request->celular;
        $contacto->save();
        $datos=contacto::all();
        Session::flash('flash_message','Usuario Creado Exitosamente');
        return view('contacto.index',compact('datos'));       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {        
        $datos=contacto::findOrFail($id);
        return view('contacto.show',compact('datos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datos=contacto::findOrFail($id);
        return view('contacto.edit',compact('datos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos = contacto::findOrFail($id);    
        $datos->nombre_contacto =$request->nombre;
        $datos->apellido_contacto =$request->apellido;
        $datos->fecha_de_nacimiento =$request->edad;
        $datos->numero_contacto =$request->celular;
        $datos->save();
        $datos = contacto::all();
        return view('contacto.index',compact('datos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        contacto::destroy($id);
        $datos=contacto::all();
        Session::flash('flash_message','Usuario eliminado Exitosamente');
        return view('contacto.index',compact('datos'));
    }
}
