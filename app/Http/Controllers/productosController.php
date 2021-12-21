<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;
use App\Models\carrito;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class productosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $productos = Productos::orderBY('Created_at', 'ASC')->get(); 
        return view('productos.index', compact('productos'));
    }
    public function cart()
    { 

        if (Auth::check()) {
            $carrito = carrito::select(
                'productos.nombre_producto',
                'productos.precio_producto',
                'productos.img_producto',
            )
                ->leftJoin('productos', 'carritos.producto_id', '=', 'productos.id')
                ->where('carritos.user_id', Auth::user()->id)
                ->get();

            $carritoTotal = carrito::select((\DB::raw('sum(precio_producto) as precio_total')))
                ->leftJoin('productos', 'carritos.producto_id', '=', 'productos.id')
                ->where('carritos.user_id', Auth::user()->id)
                ->where('carritos.status', '1')
                ->first();

            $carritoNotify = carrito::select((\DB::raw('COUNT(*)')))
                ->leftJoin('productos', 'carritos.producto_id', '=', 'productos.id')
                ->where('carritos.user_id', Auth::user()->id)
                ->where('carritos.status', '1')
                ->first();

            return view('productos.cart', compact('carrito', 'carritoTotal', 'carritoNotify'));
        } else {
            return view('productos.cart');
        }
    }
    public function catalogo($cat)
    {
        $productos = Productos::where('categoria_producto', $cat)->orderBY('Created_at', 'ASC')->get();
        $pr = $cat;

        if (Auth::check()) {
            $carrito = carrito::select(
                'productos.nombre_producto',
                'productos.precio_producto',
                'productos.img_producto',
            )
                ->leftJoin('productos', 'carritos.producto_id', '=', 'productos.id')
                ->where('carritos.user_id', Auth::user()->id)
                ->get();

            $carritoTotal = carrito::select((\DB::raw('sum(precio_producto) as precio_total')))
                ->leftJoin('productos', 'carritos.producto_id', '=', 'productos.id')
                ->where('carritos.user_id', Auth::user()->id)
                ->where('carritos.status', '1')
                ->first();

            $carritoNotify = carrito::select((\DB::raw('COUNT(*)')))
                ->leftJoin('productos', 'carritos.producto_id', '=', 'productos.id')
                ->where('carritos.user_id', Auth::user()->id)
                ->where('carritos.status', '1')
                ->first();

            return view('productos.catalogo', compact('productos', 'pr', 'carrito', 'carritoTotal', 'carritoNotify'));
        } else {
            return view('productos.catalogo', compact('productos', 'pr'));
        }
    }

    public function welcome()
    {
        $productos = Productos::all();
        $regalos = Productos::where('categoria_producto', 'Regalos')->orderBY('Created_at', 'ASC')->get();
        $novedades = Productos::where('categoria_producto', 'Novedades')->orderBY('Created_at', 'ASC')->get();
        $merceria = Productos::where('categoria_producto', 'Merceria')->orderBY('Created_at', 'ASC')->get();
        $papeleria = Productos::where('categoria_producto', 'Papeleria')->orderBY('Created_at', 'ASC')->get();
        $cosmeticos = Productos::where('categoria_producto', 'cosmeticos')->orderBY('Created_at', 'ASC')->get();
   
        if (Auth::check()) {
            $carrito = carrito::select(
                'productos.nombre_producto',
                'productos.precio_producto',
                'productos.img_producto',
            )
                ->leftJoin('productos', 'carritos.producto_id', '=', 'productos.id')
                ->where('carritos.user_id', Auth::user()->id)
                ->get();

            $carritoTotal = carrito::select((\DB::raw('sum(precio_producto) as precio_total')))
                ->leftJoin('productos', 'carritos.producto_id', '=', 'productos.id')
                ->where('carritos.user_id', Auth::user()->id)
                ->where('carritos.status', '1')
                ->first();

            $carritoNotify = carrito::select((\DB::raw('COUNT(*)')))
                ->leftJoin('productos', 'carritos.producto_id', '=', 'productos.id')
                ->where('carritos.user_id', Auth::user()->id)
                ->where('carritos.status', '1')
                ->first();

            return view('welcome', compact('cosmeticos','productos', 'merceria', 'regalos', 'novedades', 'papeleria', 'carrito', 'carritoTotal', 'carritoNotify'));
        } else {
            return view('welcome', compact('cosmeticos','productos', 'merceria', 'regalos', 'novedades', 'papeleria'));
        }
    }

    public static function caritoT()
    {
        if (Auth::check()) {

            $carritoNotify = carrito::select((\DB::raw('COUNT(*)')))
                ->leftJoin('productos', 'carritos.producto_id', '=', 'productos.id')
                ->where('carritos.user_id', Auth::user()->id)
                ->where('carritos.status', '1')
                ->first();
            return $carritoNotify;
        }
    }

    public function store(Request $request)
    {
        $id = $request->input('id_producto');
        $productos = new productos();
        $productos->nombre_producto = $request->input('nombre_producto');
        $productos->descripcion_producto = $request->input('descripcion_producto');
        $productos->categoria_producto = $request->input('categoria_producto');
        $productos->precio_producto = $request->input('precio_producto');
        $productos->status = "ACTIVO";
        $productos->save();

        $img_update = productos::where('id', $productos->id)->first();

        if ($request->hasFile('img_producto')) {
            $imagen = $request->file("img_producto");
            $nombreimagen = Str::slug("product_") . $id . "." . $imagen->guessExtension();
            $ruta = public_path("img/productos/");
            copy($imagen->getRealPath(), $ruta . $nombreimagen);
            $img_update->img_producto = $nombreimagen;
        }
        $img_update->update();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Productos::where('id', $id)->first();
        if (Auth::check()) {
            $carrito = carrito::select(
                'productos.nombre_producto',
                'productos.precio_producto',
                'productos.img_producto',
            )
                ->leftJoin('productos', 'carritos.producto_id', '=', 'productos.id')
                ->where('carritos.user_id', Auth::user()->id)
                ->get();

            $carritoTotal = carrito::select((\DB::raw('sum(precio_producto) as precio_total')))
                ->leftJoin('productos', 'carritos.producto_id', '=', 'productos.id')
                ->where('carritos.user_id', Auth::user()->id)
                ->where('carritos.status', '1')
                ->first();

            $carritoNotify = carrito::select((\DB::raw('COUNT(*)')))
                ->leftJoin('productos', 'carritos.producto_id', '=', 'productos.id')
                ->where('carritos.user_id', Auth::user()->id)
                ->where('carritos.status', '1')
                ->first();

            return view('productos.show', compact('producto', 'carrito', 'carritoTotal', 'carritoNotify'));
        } else {
            return view('productos.show', compact('producto'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productos = productos::where('id', $id)->first();
        return view('productos.edit', compact('productos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $productos = productos::where('id', $id)->first();
        $productos->nombre_producto = $request->input('nombre_producto');
        $productos->descripcion_producto = $request->input('descripcion_producto');
        $productos->categoria_producto = $request->input('categoria_producto');
        $productos->precio_producto = $request->input('precio_producto');
        $productos->update();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productos = productos::where('id', $id)->first();
        $productos->dalete();
        return back();
    }
}
