@extends('plantilla')
@section('contenido')
  <div class="row mt-3 justify-content-center">
    <div class="col-md-2 col-xs-6 mt-2">
      <div class="d-grid mx-auto">
        <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalProductos">
          <i class="fa-solid fa-circle-plus"></i>  Añadir
        </button>
      </div>
    </div>
    <div class="col-md-2 col-xs-6 mt-2">
      <div class="d-grid mx-auto">
        <a href=" {{ route('descargar-pdf') }} " class="btn btn-danger">
          <i class="fa-solid fa-file-pdf"></i>  Generar PDF
        </a>
      </div>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-12 col-lg-8 offset-0 offset-lg-2">
      <div class="table-responsive bdr">
        <table class="table table-striped table-hover">
          <thead class="bg-primary text-white text-center">
            <tr>
              <th>#</th>
              <th>PRODUCTOS</th>
              <th>MARCA</th>
              <th>DESCRIPCION</th>
              <th>CATEGORIA</th>
              <th>EDITAR</th>
              <th>ELIMINAR</th>
            </tr>
          </thead>
          <tbody>
            @php $i=1; @endphp
            @foreach ($productos as $row)
              <tr>
                <td> {{ $i++ }} </td>
                <td> {{ $row->nombre }} </td>
                <td> {{ $row->marca }} </td>
                <td> {{ $row->descripcion }} </td>
                <td> {{ $row->categoria }} </td>
                <td>
                  <a href=" {{ url('productos',[$row]) }}" class="btn btn-warning"><i class="fa-solid fa-edit"></i></a>
                </td>
                <td>
                  <form action=" {{ url('productos',[$row]) }} " method="POST">
                    @method("delete")
                    @csrf
                    <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

  {{-- MODAL --}}

<div class="modal fade" id="modalProductos" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <label class="h5" id="titulo_modal">Añadir Productos</label>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form id="frmProductos" method="POST" action="{{url("productos")}}">
                  @csrf
                  <div class="input-group mb-3">
                      <span class="input-group-text"><i class="fa-solid fa-cart-shopping"></i></span>
                      <input type="text" name="nombre" class="form-control" maxlength="50" placeholder="Producto" required>
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-cart-shopping"></i></span>
                    <input type="text" name="marca" class="form-control" maxlength="50" placeholder="Marca del Producto" required>
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-cart-shopping"></i></span>
                    <input type="text" name="descripcion" class="form-control" maxlength="1000" placeholder="Descripcion del Producto" required>
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-cart-shopping"></i></span>
                    <select name="id_categoria" class="form-select" required>
                      <option value="">Categoria</option>
                      @foreach ($categorias as $row)
                        <option value=" {{ $row->id }} "> {{ $row->categoria }} </option>
                      @endforeach
                    </select>
                  </div>
                  <div class="d-grid col-6 mx-auto">
                      <button class="btn btn-success" ><i class="fa-solid fa-floppy-disk"></i>  Guardar</button>
                  </div>
              </form>
          </div>
          <div class="modal-footer">
              <button type="button" id="btnCerrar" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          </div>
      </div>
  </div>
</div>


@endsection