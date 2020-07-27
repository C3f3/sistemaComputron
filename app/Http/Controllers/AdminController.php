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

    public function updateCliente(Request $request){
        return view('admin.actualizarCliente');
    }
}
