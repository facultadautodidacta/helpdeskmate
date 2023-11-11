@extends('layouts/main')
@section('titulo', 'Captura de soporteo')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col mt-4">
                <h2>Captura de trabajo de soporte</h2>
                <a href="{{ route('soporte-create') }}" class="btn btn-primary">
                    Agregar
                </a>
                <hr>
                <table id="soporte-table" class="table table-bordered table-sm table-hover">
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
                            <th>Editar</th>
                            <th>Eliminar</th>
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
                            <td>
                                <a href="{{ route('soporte-edit', $item->id) }}" class="btn btn-warning">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('soporte-destroy', $item->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    
                                    <button class="btn btn-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
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
                $('#soporte-table').DataTable();
            });
          </script>
      @endpush

@endsection