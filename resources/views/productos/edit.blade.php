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
        <div class="col-md-9">
            <h5>{{ __('Agregar producto') }}</h5>
            <hr>

            <div class="card">

                <div class="card-body">
                    <form method="post" action="{{ route('productos.update', ['id'=> $productos->id] ) }}" enctype="multipart/form-data">
                    @method('PATCH') @csrf
                        <div class="form-group">
                          <label for="nombre_producto">Nombre del producto</label>
                          <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" value="{{ $productos->nombre_producto}}">
                        </div>
                        <div class="form-group">
                          <label for="categoria_producto">Categoria</label>
                          <select class="form-control" id="categoria_producto" name="categoria_producto" required>
                            <option value="{{ $productos->categoria_producto}}">{{ $productos->categoria_producto}}</option>
                            <option value="Pepeleria">Pepeleria</option>
                            <option value="Regalos">Regalos</option>
                            <option value="Merceria">Merceria</option>
                            <option value="Novedades">Novedades</option>
                          </select>
                        </div>
                       
                        <div class="form-group">
                          <label for="descripcion_producto">Descripcion</label>
                          <textarea class="form-control" name="descripcion_producto"   id="descripcion_producto" rows="3">{{ $productos->descripcion_producto}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="precio_producto">Precio del producto</label>
                            <input type="number" class="form-control" id="precio_producto" name="precio_producto" placeholder="$.00" value="{{ $productos->precio_producto}}">
                          </div>
                         
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Actualizar</button>
                        </div>
                      </form>
                </div>
            </div>
        </div>

        

    </div>
</div>
@endsection
