@extends('layouts/main')
@section('titulo', 'Listado seguimiento')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col mt-4">
                <h2>Listado de seguimiento</h2>
                <hr>
                <table id="listado-table" class="table table-bordered table-sm table-hover">
                    <thead>
                        <tr>
                            <th>Cliente</th>
                            <th>Trabajo</th>
                            <th>Monto</th>
                            <th>Fecha</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                            <th>Trabajo futuro</th>
                            <th>Posible fecha</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                            <td>{{ $item->cliente }}</td>
                            <td>{{ $item->trabajo }}</td>
                            <td>{{ $item->monto }}</td>
                            <td>{{ $item->fecha }}</td>
                            <td>{{ $item->telefono }}</td>
                            <td>{{ $item->correo }}</td>
                            <td>{{ $item->trabajo_futuro }}</td>
                            <td>{{ $item->fecha_futura }}</td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @push('scripts')
          <script>
            $(document).ready(function(){
                $('#listado-table').DataTable();
            });
          </script>
    @endpush
@endsection