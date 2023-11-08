@extends('layouts/main')
@section('titulo', 'Captura de soporteo')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col mt-4">
                <h2>Captura de trabajo de soporte</h2>
                <a href="#" class="btn btn-primary">
                    Agregar
                </a>
                <hr>
                <table class="table table-sm table-hover">
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
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href="" class="btn btn-warning">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                            </td>
                            <td>
                                <a href="" class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
 <     </div>
@endsection