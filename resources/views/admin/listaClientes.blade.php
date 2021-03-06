@extends('admin.layouts.baseAdmin')

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container">
            @if (Session::has('mensaje'))
                <div class="alert alert-info mt-3">{{ Session::get('mensaje') }}</div>
            @endif
            <h1 class="mt-4">Panel de Control</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Clientes</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Nuestros Clientes
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Telefono</th>
                                    <th>Puntos</th>
                                    <th>Acciones</th>
                                    
                                </tr>
                            </thead>
                            
                            <tfoot>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Telefono</th>
                                    <th>Puntos</th>
                                    <th>Acciones</th>
                                    
                                </tr>
                            </tfoot>
                            <tbody>
                            @forelse($clientes as $clienteItem)   
                            
                                
                                <tr>
                                    <td>{{$clienteItem['name']}}</td>
                                     <td>{{$clienteItem['email']}}</td>
                                    <td>{{$clienteItem['telefono']}}</td>
                                    <td>{{$clienteItem['puntos']}}</td>
                                    <td>
                                    <a href="{{route('verCliente',$clienteItem)}}" class="btn btn-success" alt="ver"><ion-icon name="eye"></ion-icon></a>
                                    <a href="{{route('eliminarCliente',$clienteItem)}}" class="btn btn-danger"><ion-icon name="trash"></ion-icon></a>
                                    <a href="" class="btn btn-primary"><ion-icon name="build"></ion-icon></a>

                                    </td>
                                    
                                </tr>
                            @empty
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a href="" class="btn btn-success"><ion-icon name="eye"></ion-icon></a>
                                        <a href="" class="btn btn-danger"><ion-icon name="trash"></ion-icon></a>
                                        <a href="" class="btn btn-primary"><ion-icon name="build"></ion-icon></a>
                                    </td>
                                
                                 </tr>
                            </tbody>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
   
</div>
    
@endsection