<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;
use Illuminate\Support\Facades\Redirect;

class CategoriasController extends Controller
{

    public function index()
    {
        $categorias = Categorias::all();
        return view('categorias',compact('categorias'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $categoria = new Categorias($request->input());
        $categoria->saveOrFail();
        return redirect('categorias');
    }


    public function show($id)
    {
      $categoria = Categorias::find($id);
      return view('editCategoria', compact('categoria'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
      $categoria = Categorias::find($id);
      $categoria->fill($request->input())->saveOrFail();
      return redirect('categorias');
    }

    public function destroy($id)
    {
      $categoria = Categorias::find($id);
      $categoria->delete();
      return redirect('categorias');
    }
}
