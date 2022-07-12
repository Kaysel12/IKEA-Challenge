<?php

namespace App\Http\Controllers;

use App\Models\Invitados;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreInvitado;
use Illuminate\Http\Request;





class InvitadosController extends Controller
{
    /* Display a listing of the resource.*/
    public function index (Request $request) {

        $column = 'id';
        $value = 'desc';

        if ($request->input('edad')) {
            $column = 'edad';
            $value = $request->edad;
        }
        if ($request->input('nombre')) {
            $column = 'nombre';
            $value = $request->nombre;
        } 


        $filter = $request->busqueda;
        $invitados = DB::table('invitados')
                        ->select('*')
                        ->where('nombre', 'LIKE', '%'.$filter.'%')
                        ->orWhere('correo', 'LIKE', '%'.$filter. '%')
                        ->orderBy($column, $value)
                        ->paginate(10);

        
        
        // contador
        $count = Invitados::all()->count();
        $datos = $invitados;

        // Total de datos enpaginado 
        // $datos = Invitados::orderBy('id','desc')->paginate(10);

        // Retorno
        return view('invitados.invitados', compact('datos', 'count'));
    }


    /*Show the form for creating a new resource.*/
    public function create () {
        return view('invitados.formulario');
    }


    /*Store a newly created resource in storage.*/
    public function store (StoreInvitado $request) {
        // $count = Invitados::all()->count();
        $request = request()->except('_token', 'check');
        Invitados::insert($request);
        // return response()->json($datosInvitados);
        // return view('invitados.modal');
        return redirect()->route('invitados.create')->with('message', 'Los datos han sido enviados satisfactoriamente');
    }


    /*Display the specified resource.*/
    public function show (Invitados $invitados) {
        //
    }


    /*Remove the specified resource from storage.*/
    public function destroy (Invitados $invitados) {
        //
    }
}
