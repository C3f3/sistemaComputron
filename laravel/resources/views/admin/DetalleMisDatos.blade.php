@extends ('admin.layouts.baseAdmin')

    @section('content')
    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid">
          @if (Session::has('mensaje'))
                <div class="alert alert-info mt-3">{{ Session::get('mensaje') }}</div>
          @endif
            <h1 class="mt-4">Panel de Control</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Mis Datos</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Detalle Mis Datos
            </div>
  
        <form method="POST" action="{{route('actualizarMisDatosAdmin',Auth::user())}}" class="mt-3">
            @csrf
            @method('PATCH')  
          
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Nombre y apellido</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Nombre..." value='{{Auth::user()->name}}'>
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email address</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="nombre@correo.com" value='{{Auth::user()->email}}'>
              </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
                <label for="telefono">Telefono</label>
            <input type="tel" name='telefono' class="form-control" id="telefono" placeholder="12345678" value='{{Auth::user()->telefono}}'>
            </div>
            <div class="form-group col-md-4" >
                <label for="coins">coins</label>
                <input type="number" name="puntos" class="form-control" id="coins" placeholder="0" value='{{Auth::user()->puntos}}' disabled>
            </div>
          </div>
              <div class="row text-center">
                  <div class="col-6">
                  <button type="submit" href="" class="btn btn-success">Guardar</button>
                  </div>
                  <div class="col-6">
                    <a type="button" href="{{route('index')}}"class="ml-auto btn btn-primary">Volver</a>
                  </div>
              </div>
          </form>    
      </main>
    </div>
    
    @endsection