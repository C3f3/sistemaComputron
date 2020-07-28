@extends('admin.layouts.base')

@section('content')

<div id="layoutSidenav_content">
    <main >
        <div class="container-fluid">
            <h1 class="mt-4">Panel de Control</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Clientes</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Detalle Cliente
            </div>

        <form method="POST" action="{{route('actualizarCliente',$usuario)}}">
            @csrf
            @method('PATCH')

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Nombre y apellido</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Nombre..." value='{{$usuario['name']}}'>
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="nombre@correo.com" value='{{$usuario['email']}}'>
              </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="rol">Rol</label>
              <select class="form-control" name="rol" value='cliente' id="rol" >
                <option {{$usuario['role']=='admin' ? 'selected': ''}}>admin</option>
                <option {{$usuario['role']=='cliente' ? 'selected': ''}}>cliente</option>
              </select>
            </div>
            <div class="form-group col-md-4">
                <label for="telefono">Telefono</label>
                <input type="tel" name='telefono' class="form-control" id="telefono" placeholder="12345678" value='{{$usuario['telefono']}}'>
            </div>
            <div class="form-group col-md-4" >
                <label for="coins">coins</label>
                <input type="number" name="puntos" class="form-control" id="coins" placeholder="0" value='{{$usuario['puntos']}}'>
            </div>
          </div>
              <div class="row text-center">
                  <div class="col-6">
                  <button type="submit" href="" class="btn btn-success">Guardar</button>
                  </div>
                  <div class="col-6">
                    <a type="button" href="{{route('listaClientes')}}"class="ml-auto btn btn-primary">Volver</a>
                  </div>
              </div>
          </form>    
        </main>
</div>

@endsection  