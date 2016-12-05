<?php

namespace SISAUGES\Http\Controllers;

use Illuminate\Http\Request;

use SISAUGES\Http\Requests;

use SISAUGES\Persona;

class PersonaController extends Controller
{
    public function store(Request $request)
    {
        $persona = New Persona();
        $persona->cedula = $request->input('cedula');
        $persona->nombre = \Request::Input('nombre');
        $persona->apellido = \Request::Input('apellido');
        $persona->email = \Request::Input('email');
        $persona->telefono = \Request::Input('telefono');
        $persona->status = true;
        $persona->save();
    }

    public function update($id)
    {
        $persona = Persona::find($id);
        $persona->cedula=\Request::Input('cedula');
        $persona->nombre=\Request::Input('nombre');
        $persona->apellido=\Request::Input('apellido');
        $persona->email=\Request::Input('email');
        $persona->telefono=\Request::Input('telefono');
        $persona->status = \Request::Input('status'); ;

        $persona->save();

    }

    public function destroy($id)
    {
        $persona = Persona::find($id);
        $persona->status = false ;
        $persona->save();
    }
}
