@extends('layouts.appNav')
@section('title', 'Admin')
<style>
    .container-login2 {
        margin-top: 2em;
    }

    .container-login {
        padding-top: 2em;
    }

</style>
@section('content')
    <div class="container-login2  container">
        <div class="row justify-content-center container-login ">
            <div class="col-md-9">
                <h1>{{ __('Productos') }}</h1>
                <hr>
                <div class="card">
                    <div class="card-body">
                        <table class="table bordered">
                            <thead>
                                <th>img</th>
                                <th>nombre</th>
                                <th>precio</th>
                                <th>Fecha de registro</th>
                                <th>status</th>
                                <th>actualizar</th>
                                <th>eliminar</th>
                            </thead>
                            <tbody>
                                @forelse ($productos as $p)
                                    <tr>
                                        <td><img width="40"
                                            src="{{ asset('img/productos/'.$p->img_producto) }}"
                                                alt=""></td>
                                        <td>{{ $p->nombre_producto }}</td>
                                        <td>{{ $p->precio_producto }}</td>
                                        <td>{{ $p->created_at }}</td>
                                        <td>{{ $p->status }}</td>
                                        <td><a class="btn btn-warning"
                                                href="{{ route('productos.edit', ['id' => $p->id]) }}">Actualizar</a></td>
                                        <td><a class="btn btn-danger"
                                                href="{{ route('productos.delete', ['id' => $p->id]) }}">Eliminar</a></td>
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
