@extends('layouts.catalogoL')
<style>
    .objetfitcover>img {
        width: auto;
        height: 500px;
        object-fit: cover;
        border: 3px solid #727272;
    }

</style>

@section('content')

    @php
    // SDK de Mercado Pago
    require base_path('vendor/autoload.php');
    // Agrega credenciales
    MercadoPago\SDK::setAccessToken(config('services.mercadopago.token'));

    // Crea un objeto de preferencia
    $preference = new MercadoPago\Preference();

    // Crea un ítem en la preferencia
    $item = new MercadoPago\Item();
    $item->title = $producto->nombre_producto;
    $item->quantity = 1;
    $item->unit_price = $producto->precio_producto;
    $preference->items = [$item];
    $preference->save();

    @endphp
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
                                    <img src="{{ asset('img/productos/' . $c->img_producto) }}" alt="IMG">
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
                        <a href="{{route('productos.cart')}}"
                            class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                            Ver carrito
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

    <div class="container">
        <div class="">

            <div class="row">
                <div class="col-md-6 col-lg-7 p-b-30">
                    <div class="p-l-25 p-r-30 p-lr-0-lg">
                        <div class="wrap-slick3 flex-sb flex-w justify-content-center">
                            <div class="slick3 gallery-lb slick-initialized slick-slider slick-dotted">
                                <div class="slick-list draggable justify-content-center">
                                    <div class="slick-track" style="opacity: 1; width: 888px;">
                                        <div class="item-slick3 slick-slide slick-current slick-active"
                                            data-thumb="images/product-detail-01.jpg" data-slick-index="0"
                                            aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide10"
                                            aria-describedby="slick-slide-control10"
                                            style="width: 50%; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
                                            <div class="wrap-pic-w pos-relative objetfitcover justify-content-center">
                                                <img src="{{ asset('img/productos/' . $producto->img_producto) }}"
                                                    alt="IMG-PRODUCT">

                                                <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04"
                                                    src="{{ asset('img/productos/' . $producto->img_producto) }}"
                                                    tabindex="0">
                                                    <i class="fa fa-expand"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5 p-b-30">
                    <div class="p-r-50 p-t-5 p-lr-0-lg">
                        <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                            {{ $producto->nombre_producto }}
                        </h4>

                        <span class="mtext-106 cl2">
                            <?php setlocale(LC_MONETARY, 'en_US');
                            ?>
                            $ {{ money_format('%(#10n', $producto->precio_producto) }} MNX


                        </span>

                        <p class="stext-102 cl3 p-t-23">
                            {{ $producto->descripcion_producto }}
                            .
                        </p>

                        <!--  -->
                        <div class="p-t-33">



                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-204 flex-w flex-m respon6-next">
                                    <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                        <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-minus"></i>
                                        </div>

                                        <input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product"
                                            value="1">

                                        <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-plus"></i>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="co-6">
                                            <div class="cho-container">
                                               
                                            </div>
                                
                                         
                                        </div>
                                        <div class="co-3">

                                            <form action="{{ route('user.cart') }}" method="POST">
                                                @csrf
                                                @if (Auth::check())
                                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                                                @endif

                                                <input type="hidden" name="producto_id" value="{{ $producto->id }}">

                                                <button type="submit"
                                                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                                    <i class="zmdi zmdi-shopping-cart"></i>
                                                </button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--  -->
                        <div class="flex-w flex-m p-l-100 p-t-40 respon7">
                            <div class="flex-m bor9 p-r-10 m-r-11">
                                <a href="#"
                                    class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100"
                                    data-tooltip="Add to Wishlist">
                                    <i class="zmdi zmdi-favorite"></i>
                                </a>
                            </div>

                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100"
                                data-tooltip="Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>

                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100"
                                data-tooltip="Twitter">
                                <i class="fa fa-twitter"></i>
                            </a>

                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100"
                                data-tooltip="Google Plus">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        // SDK MercadoPago.js V2
        <script src="https://sdk.mercadopago.com/js/v2"></script>

        <script>
            // Agrega credenciales de SDK
            const mp = new MercadoPago("{{config('services.mercadopago.key')}}", {
                locale: 'es-AR'
            });

            // Inicializa el checkout
            mp.checkout({
                preference: {
                    id: '{{ $preference->id }}'
                },
                render: {
                    container: '.cho-container', // Indica el nombre de la clase donde se mostrará el botón de pago
                    label: 'Pagar', // Cambia el texto del botón de pago (opcional)
                }
            });
        </script>
    @endsection
