@extends('admin.layouts.baseCliente')

        @section('content')
            
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Panel de Control</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Cliente</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">12 puntos</div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">3 recomendados</div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">1 trabajo pendiente</div>
                                </div>
                            </div>
                        </div>
                  
                </main>
               
            </div>
        @endsection()
