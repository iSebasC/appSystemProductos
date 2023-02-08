@extends('plantilla')
@section('contenido')
  <div class="row mt-3">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header bg-dark text-white">Editar Categoria</div>
            <div class="card-body">
                <form id="frmCategorias" method="POST" action="{{url("categorias",[$categoria])}}">
                    @method('PUT')
                    @csrf
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-clipboard"></i></span>
                        <input type="text" name="categoria" value="{{ $categoria->categoria}}" class="form-control" maxlength="50" placeholder="Categoria" required>
                    </div>
                    <div class="d-grid col-6 mx-auto">
                        <button class="btn btn-success" ><i class="fa-solid fa-floppy-disk"></i>  Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
@endsection