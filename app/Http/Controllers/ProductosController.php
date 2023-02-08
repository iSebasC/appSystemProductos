<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\Categorias;
use Barryvdh\DomPDF\Facade\Pdf;

class ProductosController extends Controller
{
    public function index()
    {
      $productos = Productos::select('productos.id','nombre','marca','descripcion','id_categoria','categoria')
        ->join('categorias','categorias.id','=','productos.id_categoria')->get();
      $categorias = Categorias::all();
      return view('productos',compact('productos', 'categorias'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
      $producto = new Productos($request->input());
      $producto->saveOrFail();
      return redirect('productos');
    }

    public function show($id)
    {
      $producto = Productos::find($id);
      $categorias = Categorias::all();
      return view('editProductos',compact('producto','categorias'));

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
      $producto = Productos::find($id);
      $producto->fill($request->input())->saveOrFail();
      return redirect('productos');
    }

    public function destroy($id)
    {
      $producto = Productos::find($id);
      $producto->delete();
      return redirect('productos');
    }

    public function generar_pdf(){
      // Generar pdf en la tabla productos
      // $producto = Productos::all();
      $productos = Productos::select('productos.id','nombre','marca','descripcion','id_categoria','categoria')
        ->join('categorias','categorias.id','=','productos.id_categoria')->get();
      $categorias = Categorias::all();
      $pdf = PDF::loadView('generar_pdf', compact('productos'));
      return $pdf->download('producto.pdf');
    }

}
