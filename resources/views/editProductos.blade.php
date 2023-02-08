@extends('plantilla')
@section('contenido')
  <div class="row mt-3">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header bg-dark text-white">Editar Productos</div>
            <div class="card-body">
                <form id="frmProductos" method="POST" action="{{url("productos",[$producto])}}">
                    @method('PUT')
                    @csrf
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-cart-shopping"></i></span>
                        <input type="text" name="nombre" value="{{ $producto->nombre}}" class="form-control" maxlength="50" placeholder="Producto" required>
                    </div>
                    <div class="input-group mb-3">
                      <span class="input-group-text"><i class="fa-solid fa-cart-shopping"></i></span>
                      <input type="text" name="marca" value="{{ $producto->marca}}"  class="form-control" maxlength="50" placeholder="Marca del Producto" required>
                    </div>
                    <div class="input-group mb-3">
                      <span class="input-group-text"><i class="fa-solid fa-cart-shopping"></i></span>
                      <input type="text" name="descripcion" value="{{ $producto->descripcion}}"   class="form-control" maxlength="1000" placeholder="Descripcion del Producto" required>
                    </div>
                    <div class="input-group mb-3">
                      <span class="input-group-text"><i class="fa-solid fa-graduation-cap"></i></span>
                      <select name="id_categoria" class="form-select" required>
                          <option value="">Categoria</option>
                          @foreach($categorias as $row)
                              @if ($row->id == $producto->id_categoria)
                                  <option selected value="{{ $row->id}}">{{ $row->categoria}}</option>
                              @else
                                  <option value="{{ $row->id}}">{{ $row->categoria}}</option>
                              @endif
                          
                          @endforeach
                      </select>
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