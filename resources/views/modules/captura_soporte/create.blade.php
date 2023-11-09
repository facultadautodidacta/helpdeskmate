@extends('layouts/main')
@section('titulo', 'Agrega soporteo')
@section('contenido')
    <div class="container">
        <div class="row mt-4">
            <div class="col">
                <h2>Capturar soporte</h2>
                <form action="{{ route('soporte-store') }}" method="POST">
                    @csrf
                    @method('post')
                    <label for="cliente">Nombre de Cliente</label>
                    <input type="text" name="cliente" id="cliente" class="form-control">
                    <label for="trabajo">Descripcion de trabajo</label>
                    <input type="text" name="trabajo" id="trabajo" class="form-control">
                    <label for="monto">Monto cobrado</label>
                    <input type="text" name="monto" id="monto" class="form-control">
                    <label for="fecha">Fecha de trabajo</label>
                    <input type="date" name="fecha" id="fecha" class="form-control">
                    <label for="telefono">Telefono del cliente</label>
                    <input type="text" name="telefono" id="telefono" class="form-control">
                    <label for="correo">Correo del cliente</label>
                    <input type="text" name="correo" id="correo" class="form-control">
                    <label for="trabajo_futuro">Descripcion de trabajo futuro</label>
                    <input type="text" name="trabajo_futuro" id="trabajo_futuro" class="form-control">
                    <label for="fecha_futura">Fecha futura</label>
                    <input type="date" name="fecha_futura" id="fecha_futura" class="form-control">
                    <button class="btn btn-primary mt-2">Agregar</button>
                </form>
            </div>
        </div>
    </div>
@endsection