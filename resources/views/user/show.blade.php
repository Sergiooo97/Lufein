@extends('layouts.app')
@section('title',  'Perfil info')

<style>
    .container-login2 {
        margin-top: 2em;
    }

    .container-login {
        padding-top: 2em;
    }

    .form-control:focus {
        box-shadow: none;
        border-color: #BA68C8
    }

    .profile-button {
        background: rgb(99, 39, 120);
        box-shadow: none;
        border: none
    }

    .profile-button:hover {
        background: #682773
    }

    .profile-button:focus {
        background: #682773;
        box-shadow: none
    }

    .profile-button:active {
        background: #682773;
        box-shadow: none
    }

    .back:hover {
        color: #682773;
        cursor: pointer
    }

    .labels {
        font-size: 11px
    }

    .add-experience:hover {
        background: #BA68C8;
        color: #fff;
        cursor: pointer;
        border: solid 1px #BA68C8
    }

</style>
@section('content')
 <!-- Cart -->
 <div class="wrap-header-cart js-panel-cart">
    <div class="s-full js-hide-cart"></div>

    <div class="header-cart flex-col-l p-l-65 p-r-25">
        <div class="header-cart-title flex-w flex-sb-m p-b-8">
            <span class="mtext-103 cl2">
                Tu carrito
            </span>

            <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                <i class="zmdi zmdi-close"></i>
            </div>
        </div>

        <div class="header-cart-content flex-w js-pscroll ps" style="position: relative; overflow: hidden;">
            <ul class="header-cart-wrapitem w-full">

                @if (Auth::check())
                @forelse ($carrito as $c)
                <li class="header-cart-item flex-w flex-t m-b-12">
                    <div class="header-cart-item-img">
                        <img src="{{ \Illuminate\Support\Facades\Storage::url('' . $c->img_producto) }}" alt="IMG">
                    </div>

                    <div class="header-cart-item-txt p-t-8">
                        <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                            {{ $c->nombre_producto }}
                        </a>

                        <span class="header-cart-item-info">
                            1 x ${{ money_format('%(#10n', $c->precio_producto) }}
                        </span>
                    </div>
                </li>
                @empty
                    <p>Aun no hay productos</p>
                @endforelse
                @endif

              

               

                
            </ul>

            <div class="w-full">
                <div class="header-cart-total w-full p-tb-40">

                    @if (Auth::check())
                    Total: ${{ money_format('%(#10n', $carritoTotal->precio_total) }}

                    @endif
                </div>

                <div class="header-cart-buttons flex-w w-full">
                    <a href="shoping-cart.html"
                        class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                        View Cart
                    </a>

                    <a href="shoping-cart.html"
                        class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                        Check Out
                    </a>
                </div>
            </div>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; right: 0px;">
                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
            </div>
        </div>
    </div>
</div>
    <div class="container container-login2">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="container container-login">
                    <h5>Informacion de perfil</h5>

                    <div class="container rounded ">
                        <div class="row">
                            <div class="col-md-3 border-right">
                                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img
                                        class="rounded-circle mt-5" width="150px"
                                        src="{{ asset('img/profiles/'.Auth::user()->img_url) }}"><span
                                        class="font-weight-bold">{{ Auth::user()->name }}</span><span
                                        class="text-black-50">{{ Auth::user()->email }}</span><span> </span></div>
                                <div class="row justify-content-center">
                                    <form action="{{ route('user.update.img') }}" method="post" enctype=multipart/form-data>
                                        @method('PATCH') @csrf
                                        <div class="form-group justify-content-center">
                                            <input type="file" name="img" id="img">
                                            <button type="submit" class="btn btn-success">Actualizar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-9 border-right border-top">
                                <form action="{{ route('user.update')}}" method="post">
                                    @method('PATCH') @csrf
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="nombre">Nombres</label>
                                                <input type="text" class="form-control" value="{{ Auth::user()->name }}"
                                                    id="nombre" name="name" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="apellidos">Apellidos</label>
                                                <input type="text" class="form-control"
                                                    value="{{ Auth::user()->apellidos }}" id="apellidos" name="apellidos"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="cp">CP</label>
                                                <input type="text" class="form-control" value="{{ Auth::user()->cp }}"
                                                    id="cp" name="cp" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="direccion">Direccion</label>
                                                <input type="text" class="form-control"
                                                    value="{{ Auth::user()->direccion }}" id="direccion" name="direccion"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="municipio">Municipio</label>
                                                <input type="text" class="form-control"
                                                    value="{{ Auth::user()->municipio }}" id="municipio" name="municipio"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="email">Correo electronico</label>
                                                <input type="text" class="form-control"
                                                    value="{{ Auth::user()->email }}" id="email" name="email" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="telefono">Telefono</label>
                                                <input type="text" class="form-control"
                                                    value="{{ Auth::user()->telefono }}" id="telefono" name="telefono"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <button class="btn btn-success" type="submit">Actualizar datos</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
