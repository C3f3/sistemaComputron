<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        if(Auth::user()->role=='admin')
            return view('admin.admin');
        else
            return view('admin.clienteAdmin');
    }
    public function listarClientes(){
        $clientes = User::get();
        
        return view('admin.listaClientes',compact('clientes'));
    }

    public function verCliente($id){
        $usuario=User::find($id);
        return view('admin.verCliente',compact('usuario'));
    }

    public function updateCliente($id, Request $request){
        
        $usuario = User::find($id);
        $usuario->update([
            'name'=>$request->get('name'),
            'telefono'=>$request->get('telefono'),
            'puntos'=>$request->get('puntos'),
            'role'=>$request->get('rol'),
            'email'=>$request->get('email'),
            
        ]);
        return redirect()->route('verCliente',$usuario)->with('mensaje','las modifiaciones fueron guardadas');
        //return view('admin.actualizarCliente',compact('usuario'));
    }
    public function deleteCliente($id){
        $u=User::find($id);
        $u->delete();
    
        return redirect()->route('listaClientes');
    }

    

    
}
