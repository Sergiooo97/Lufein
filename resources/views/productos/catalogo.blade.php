@extends('layouts.catalogoL')
<style>
    .objetfitcover > img{
	width: auto;
	height: 400;
	object-fit: cover;
	border: 0.6px solid #727272;
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
                        <img src="{{ asset('img/productos/'.$c->img_producto) }}" alt="IMG">
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
    <div class="bg0 m-t-23 p-b-140">
        <div class="container">
            <div class="row isotope-grid" style="position: relative; height: 2328.28px;">
                @foreach ($productos as $p)
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women"
                        style="position: absolute; left: 0%; top: 388px;">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-pic hov-img0 objetfitcover">
                                <img src="{{ asset('img/productos/'.$p->img_producto) }}"
                                    alt="IMG-PRODUCT">


                                <!-- Button trigger modal -->

                                <a href="{{ route('productos.show', ['id'=>$p->id])}}"
                                    class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
                                    Detalles
                                </a>
                            </div>

                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        {{ $p->nombre_producto }}
                                    </a>

                                    <span class="stext-105 cl3">
                                        ${{ $p->precio_producto }}
                                    </span>
                                </div>


                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- TERMINA CARD DEL PRODUCTO --}}

            </div>
        </div>
    </div>





@endsection
