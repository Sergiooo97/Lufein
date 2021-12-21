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
          <div class="card">
              <div class="card-header">carrito</div>
              <div class="card-body">
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
    </div>





@endsection
