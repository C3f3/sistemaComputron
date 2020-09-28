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
                <li class="breadcrumb-item active">Campaña</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Nuestros Flyers
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Titulo</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        
                        <tfoot>
                            <tr>
                                <th>Imagen</th>
                                <th>Titulo</th>
                                <th>Acciones</th>        
                            </tr>
                        </tfoot>
                        <tbody>
                            @forelse ($imagenes as $img)   
                            <tr>
                                <td>
                                    <img src="{{Storage::url("imagenes/flyers/$img->foto")}}" alt="" width="80"/>
                                </td>
                                <td>
                                    {{ $img['title'] }}
                                </td>
                                <td>
                                    <a href="" class="btn btn-success">Compartir</a>
                                    <a href="{{ route('eliminarFlyer',$img) }}" class="btn btn-danger">Eliminar</a>
                                </td>
                                
                            </tr>
                            @empty
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href="" class="btn btn-success">Compartir</a>
                                    <a href="" class="btn btn-danger">Eliminar</a>
                                </td>
                            </tr>

                            @endforelse
                        
                        </tbody>
                    
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection