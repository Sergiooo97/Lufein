<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\productos;
use App\Models\carrito;

use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Productos::OrderBy('Created_at', 'ASC')->get()->take(10);
        return view('admin.index', compact('productos'));
    }
    public function clientes()
    {
        $user = User::where('id', '!=', '1')->OrderBy('Created_at', 'ASC')->get();
        return view('admin.clientes', compact('user'));
    }
    public function show()
    {
        $user = User::where('id', Auth::user()->id)->first();
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

            return view('user.show', compact('user', 'carrito', 'carritoTotal', 'carritoNotify'));
        } else {
            return view('user.show', compact('user'));
        }
    }
}
