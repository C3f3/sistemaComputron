<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\User;

class CountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        if(Auth::user()->role=='admin')
            return view('admin.DetalleMisDatos');
        else
            return view('admin.adminCliente.detalleMisDatos');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function updateDatos($id,Request $request){
        
        $usuario = User::find($id);
        $usuario->update([
            'name'=>$request->get('name'),
            'telefono'=>$request->get('telefono'),
            'puntos'=>$request->get('puntos'),
            'email'=>$request->get('email'),
            
        ]);
        
        if(Auth::user()->role=='admin')
            return redirect()->route('verMisDatos')->with('mensaje','las modifiaciones fueron guardadas');
        else
            return redirect()->route('clientesMisDatos')->with('mensaje','las modificaciones fueron guardadas');
    }
}
