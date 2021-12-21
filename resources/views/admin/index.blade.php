@extends('layouts.appNav')
@section('title',  'Admin')
<style>
   
    .container-login2{
        margin-top: 2em;
    }
    .container-login{
        padding-top: 2em;
    }
</style>
@section('content')
<div class="container-login2  container">
    <div class="row justify-content-center container-login ">
        <div class="col-md-8">
            <h5>{{ __('Agregar producto') }}</h5>
            <hr>

            <div class="card">

                <div class="card-body">
                    <form method="post" action="{{ route('productos.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="nombre_producto">Nombre del producto</label>
                          <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" placeholder="Escriba aqui el nombre del producto">
                        </div>
                        <div class="form-group">
                          <label for="categoria_producto">Categoria</label>
                          <select class="form-control" id="categoria_producto" name="categoria_producto" required>
                            <option value="">Seleccionar</option>
                            <option value="Papeleria">Pepeleria</option>
                            <option value="Regalos">Regalos</option>
                            <option value="Merceria">Merceria</option>
                            <option value="Novedades">Novedades</option>
                            <option value="cosmeticos">cosmeticos</option>

                          </select>
                        </div>
                       
                        <div class="form-group">
                          <label for="descripcion_producto">Descripcion</label>
                          <textarea class="form-control" name="descripcion_producto"  id="descripcion_producto" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="precio_producto">Precio del producto</label>
                            <input type="number" class="form-control" id="precio_producto" name="precio_producto" placeholder="$.00">
                          </div>
                          <div class="form-group">
                            <label for="img_producto">Imagen del producto</label>
                            <input type="file" class="form-control" id="img_producto" name="img_producto" placeholder="Escriba aqui el nombre del producto">
                          </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Registrar</button>
                        </div>
                      </form>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <h5>{{ __('Productos recientes agregados') }}</h5>
            <hr>
            <div class="card">
                <div class="card-body">
                  <table class="table bordered">
                    <thead>
                      <th>nombre</th>
                      <th>precio</th>
                    </thead>
                    <tbody>
                      @forelse ($productos as $p)
                      <tr>
                        <td>{{ $p->nombre_producto }}</td>
                        <td>{{ $p->precio_producto }}</td>
                      </tr>
                      @empty
                      @endforelse
                    </tbody>
                  </table>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection
