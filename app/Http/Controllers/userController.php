<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\carrito;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.mi_cuenta');
    }

    public function cartStore(Request $request)
    {
        $carrito = new carrito();
        $carrito->user_id = $request->input('user_id');
        $carrito->producto_id = $request->input('producto_id');
        $carrito->status = '1';
        $carrito->save();

        return back();
    }
    public function update(Request $request)
    {
        $user = User::where('id',Auth::user()->id)->first();
        $user->name = $request->input('name');
        $user->apellidos = $request->input('apellidos');
        $user->cp = $request->input('cp');
        $user->direccion = $request->input('direccion');
        $user->municipio = $request->input('municipio');
        $user->telefono = $request->input('telefono');
        $user->update();

        return back();
        
    }
    public function updateImg(Request $request)
    {
        $user = User::where('id', Auth::user()->id)->first();
        if($request->hasFile('img')){
            $imagen = $request->file("img");
            $nombreimagen = Str::slug(Auth::user()->id).".".$imagen->guessExtension();
            $ruta = public_path("img/profiles/");
            copy($imagen->getRealPath(),$ruta.$nombreimagen);
            $user->img_url = $nombreimagen; 
        }        
        $user->update();

        return back();
    }
}
