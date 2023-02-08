<style>
  .text-tittle{
    text-align: center;
    font-weight: bold;
  }
  .main-container{
    margin: 50px auto;
  }
  table{
    width: 100%;
    text-align: left;
    border-collapse: collapse;
  }
  thead{
    background-color: #0d6efd;
    color: #fff;
  }
  th, td{
    padding: 15px;
  }
</style>

<h2 class="text-tittle">Reporte de Productos</h2>

<table class="main-container">
  <thead>
    <tr>
      <th>#</th>
      <th>PRODUCTOS</th>
      <th>MARCA</th>
      <th>DESCRIPCION</th>
      <th>CATEGORIA</th>
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
      </tr>
    @endforeach
  </tbody>
</table>