@extends('plantilla')
@section('contenido')
  <div class="row mt-3">
    <div class="col-md-4 offset-md-4">
      <div class="d-grid mx-auto">
        <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalCategorias">
          <i class="fa-solid fa-circle-plus"></i>  Añadir
      </button>

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
              <th>CATEGORIAS</th>
              <th>EDITAR</th>
              <th>ELIMINAR</th>
            </tr>
          </thead>
          <tbody>
            @php $i=1; @endphp
            @foreach ($categorias as $row)
              <tr class="text-center">
                <td> {{ $i++ }} </td>
                <td> {{ $row->categoria }} </td>
                <td>
                  <a href=" {{ url('categorias',[$row]) }}" class="btn btn-warning"><i class="fa-solid fa-edit"></i></a>
                </td>
                <td>
                  <form action=" {{ url('categorias',[$row]) }} " method="POST">
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

<div class="modal fade" id="modalCategorias" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <label class="h5" id="titulo_modal">Añadir categorias</label>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form id="frmCategorias" method="POST" action="{{url("categorias")}}">
                  @csrf
                  <div class="input-group mb-3">
                      <span class="input-group-text"><i class="fa-solid fa-clipboard"></i></span>
                      <input type="text" name="categoria" class="form-control" maxlength="50" placeholder="Categoria" required>
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