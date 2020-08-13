@extends('admin.layouts.baseAdmin')
        @section('content')
            
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Panel de Control</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Administrador</li>
                        </ol>
                        <div class="row">

                            <!--Cantidad de clientes-->
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">134 clientes</div>
                                </div>
                            </div>

                            <!--Cantidad de trabajos entregados-->
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">127 trabajos terminados</div>
                                </div>
                            </div>

                            <!--Cantidad de trabajos pendientes-->
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body"> 10 Trabajos Pendientes</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
               
            </div>
        @endsection()
