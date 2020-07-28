@extends('admin.layouts.base')

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container">
            <h1 class="mt-4">Panel de Control</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Nuevo Flyer</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Nuestros Flyers
                </div>
            </div>
        <form method="POST" action="{{route('guardarFlyer')}}" class="form-horizontal" autocomplete="off" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Titulo</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Titulo..." >
                </div>
                <div class="form-group">
                    <label for="flyer" class="control-label">Imagen</label>
                    <input type="file" name="foto_up" id="flyer" data-initial-preview="https://place-hold.it/400x500" accept="image/*">
                </div>
                <div class="row">
                    <div class="col-6">
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                    <div class="col-6">
                        <a href="" class="btn btn-danger">Cancelar</a>
                    </div>
                </div>

            </form>
        </div>
    </main>
</div>
@endsection