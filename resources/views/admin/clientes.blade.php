@extends('layouts.catalogoL')
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
        <div class="col-md-10">
            <h5>{{ __('Clientes de lufein') }}</h5>
            <hr>

            <div class="card">

                <div class="card-body">
                    <table class="table hoverable">
                      <thead>
                        <th>ID</th>
                        <th>Nombres</th>
                        <th>Usuario</th>
                        <th>municipio</th>
                      </thead>
                      <tbody>
                        @forelse ($user as $u)
                        <tr>
                          <td>{{ $u->id }}</td>
                          <td>{{ $u->name}}</td>
                          <td>{{ $u->email}}</td>
                          <td>{{ $u->municipio}}</td>

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
