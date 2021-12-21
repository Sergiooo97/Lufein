@extends('layouts.app')
<style>
    .objetfitcover > img{
	width: auto;
	height: 400;
	object-fit: cover;
	border: 0.6px solid #727272;
}

</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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



    <!-- Slider -->



    <!-- Banner -->
    <div class="sec-banner bg0 p-t-80 p-b-50">
        <div class="container">
            <div class="row">
                <div class="container">
                    <div style="height: 460px !important;" id="myCarousel" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                      </ol>
                  
                      <!-- Wrapper for slides -->
                      <div style="height: 460px !important;"class="carousel-inner">
                  
                        <div class="item active">
                          <img height="260px" width="650" src="{{asset('img/banner.jpg')}}" alt="Los Angeles" style="width:100%;">
                          <div class="carousel-caption">
                            <h3>Los Angeles</h3>
                            <p>LA is always so much fun!</p>
                          </div>
                        </div>
                  
                        <div class="item">
                          <img src="chicago.jpg" alt="Chicago" style="width:100%;">
                          <div class="carousel-caption">
                            <h3>Chicago</h3>
                            <p>Thank you, Chicago!</p>
                          </div>
                        </div>
                      
                        <div class="item">
                          <img src="ny.jpg" alt="New York" style="width:100%;">
                          <div class="carousel-caption">
                            <h3>New York</h3>
                            <p>We love the Big Apple!</p>
                          </div>
                        </div>
                    
                      </div>
                  
                      <!-- Left and right controls -->
                      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
            </div>
        </div>
    </div>


    <!-- Product -->
    <section class="bg0 p-t-23 p-b-140">
        <div class="container">
            <div class="p-b-10">
                <h3 class="ltext-103 cl5">
                    Productos de Lufein
                </h3>
            </div>

            <div class="flex-w flex-sb-m p-b-52">
                <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                        Todos los productos
                    </button>

                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".papeleria">
                        Papeleria
                    </button>

                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".merceria">
                        Merceria
                    </button>

                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".regalos">
                        Regalos
                    </button>

                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".novedades">
                        Novedades
                    </button>
                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".cosmeticos">
                        Cosmeticos
                    </button>
                </div>


            </div>
{{-- ///////////////////////////////////////////// --}}

<div class="row isotope-grid" style="position: relative; height: 2328.28px;">


                {{-- EMPIEZA CARD DEL PRODUCTO --}}
                @forelse ($cosmeticos as $p)
                    

                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item cosmeticos "
                        style="position: absolute; left: 0%; top: 0px;">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-pic hov-img0 objetfitcover">
                                <img src="{{ asset('img/productos/'.$p->img_producto) }}"
                                    alt="IMG-PRODUCT">

                                    <a href="{{ route('productos.show', ['id'=>$p->id])}}"
                                        class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
                                        Detalles
                                    </a>
                            </div>

                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a  style="font-size: 17px !important; color:#222;" href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        {{ $p->nombre_producto }}
                                    </a>

                                    <span class="stext-105 cl3">
                                        ${{ $p->precio_producto }}
                                    </span>
                                </div>

                                <div class="block2-txt-child2 flex-r p-t-3">
                                    <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                        <img class="icon-heart1 dis-block trans-04" src="images/icon-heart-01.png"
                                            alt="ICON">
                                        <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icon-heart-02.png"
                                            alt="ICON">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                @endforelse
                {{-- EMPIEZA CARD DEL PRODUCTO --}}
                {{-- EMPIEZA CARD DEL PRODUCTO --}}
                @forelse ($papeleria as $p)
                    

                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item papeleria "
                        style="position: absolute; left: 0%; top: 0px;">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-pic hov-img0 objetfitcover">
                                <img src="{{ asset('img/productos/'.$p->img_producto) }}"
                                    alt="IMG-PRODUCT">

                                    <a href="{{ route('productos.show', ['id'=>$p->id])}}"
                                        class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
                                        Detalles
                                    </a>
                            </div>

                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a  style="font-size: 17px !important; color:#222;" href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        {{ $p->nombre_producto }}
                                    </a>

                                    <span class="stext-105 cl3">
                                        ${{ $p->precio_producto }}
                                    </span>
                                </div>

                                <div class="block2-txt-child2 flex-r p-t-3">
                                    <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                        <img class="icon-heart1 dis-block trans-04" src="images/icon-heart-01.png"
                                            alt="ICON">
                                        <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icon-heart-02.png"
                                            alt="ICON">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                @endforelse
                {{-- EMPIEZA CARD DEL PRODUCTO --}}
                @forelse ($merceria as $p)
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item merceria"
                        style="position: absolute; left: 0%; top: 0px;">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-pic hov-img0 objetfitcover">
                                <img src="{{ asset('img/productos/'.$p->img_producto) }}"

                                    alt="IMG-PRODUCT">

                                    <a href="{{ route('productos.show', ['id'=>$p->id])}}"
                                        class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
                                        Detalles
                                    </a>
                            </div>

                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a  style="font-size: 17px !important; color:#222;" href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        {{ $p->nombre_producto }}
                                    </a>

                                    <span class="stext-105 cl3">
                                        ${{ $p->precio_producto }}
                                    </span>
                                </div>

                                <div class="block2-txt-child2 flex-r p-t-3">
                                    <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                        <img class="icon-heart1 dis-block trans-04" src="images/icon-heart-01.png"
                                            alt="ICON">
                                        <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icon-heart-02.png"
                                            alt="ICON">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                @endforelse
                {{-- EMPIEZA CARD DEL PRODUCTO --}}
                @forelse ($regalos as $p)
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item regalos"
                        style="position: absolute; left: 0%; top: 0px;">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-pic hov-img0 objetfitcover">
                                <img src="{{ asset('img/productos/'.$p->img_producto) }}"

                                    alt="IMG-PRODUCT">

                                    <a href="{{ route('productos.show', ['id'=>$p->id])}}"
                                        class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
                                        Detalles
                                    </a>
                            </div>

                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a style="font-size: 17px !important; color:#222;"href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        {{ $p->nombre_producto }}
                                    </a>

                                    <span class="stext-105 cl3">
                                        ${{ $p->precio_producto }}
                                    </span>
                                </div>

                                <div class="block2-txt-child2 flex-r p-t-3">
                                    <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                        <img class="icon-heart1 dis-block trans-04" src="images/icon-heart-01.png"
                                            alt="ICON">
                                        <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icon-heart-02.png"
                                            alt="ICON">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                @endforelse
                {{-- EMPIEZA CARD DEL PRODUCTO --}}
                @forelse ($novedades as $p)
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item novedades"
                        style="position: absolute; left: 0%; top: 0px;">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-pic hov-img0 objetfitcover">
                                <img src="{{ asset('img/productos/'.$p->img_producto) }}"

                                    alt="IMG-PRODUCT">

                                    <a href="{{ route('productos.show', ['id'=>$p->id])}}"
                                        class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
                                        Detalles
                                    </a>
                            </div>

                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a style="font-size: 17px !important; color:#222;" href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        {{ $p->nombre_producto }}
                                    </a>

                                    <span class="stext-105 cl3">
                                        ${{ $p->precio_producto }}
                                    </span>
                                </div>

                                <div class="block2-txt-child2 flex-r p-t-3">
                                    <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                        <img class="icon-heart1 dis-block trans-04" src="images/icon-heart-01.png"
                                            alt="ICON">
                                        <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icon-heart-02.png"
                                            alt="ICON">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                @endforelse
        </div>



        </div>
    </section>



@endsection
