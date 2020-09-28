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
                    <li class="breadcrumb-item active">Trabajos</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Nuestros Trabajos
                    </div>
    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Cliente</th>
                                        <th>Fecha</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                        
                                    </tr>
                                </thead>
                                
                                <tfoot>
                                    <tr>
                                        <th>Cliente</th>
                                        <th>Fecha</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                        
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        
                                        <td>
                                            <a href="" class="btn btn-success">Ver</a>
                                            <a href="" class="btn btn-danger">Eliminar</a>
                                        </td>
                                    
                                     </tr>
                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
       
    </div>    

    @endsection