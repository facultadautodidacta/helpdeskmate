@extends('layouts/main')
@section('titulo', 'Editar soporteo')
@section('contenido')
    <div class="container">
        <div class="row mt-4">
            <div class="col">
                <h2>Editar soporte</h2>
                <form action="{{ route('soporte-update', $item->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <label for="cliente">Nombre de Cliente</label>
                    <input value="{{ $item->cliente }}" type="text" name="cliente" id="cliente" class="form-control">
                    <label for="trabajo">Descripcion de trabajo</label>
                    <input value="{{ $item->trabajo }}" type="text" name="trabajo" id="trabajo" class="form-control">
                    <label for="monto">Monto cobrado</label>
                    <input value="{{ $item->monto }}" type="text" name="monto" id="monto" class="form-control">
                    <label for="fecha">Fecha de trabajo</label>
                    <input value="{{ $item->fecha }}" type="date" name="fecha" id="fecha" class="form-control">
                    <label for="telefono">Telefono del cliente</label>
                    <input value="{{ $item->telefono }}" type="text" name="telefono" id="telefono" class="form-control">
                    <label for="correo">Correo del cliente</label>
                    <input value="{{ $item->correo }}" type="text" name="correo" id="correo" class="form-control">
                    <label for="trabajo_futuro">Descripcion de trabajo futuro</label>
                    <input value="{{ $item->trabajo_futuro }}" type="text" name="trabajo_futuro" id="trabajo_futuro" class="form-control">
                    <label for="fecha_futura">Fecha futura</label>
                    <input value="{{ $item->fecha_futura }}" type="date" name="fecha_futura" id="fecha_futura" class="form-control">
                    <button class="btn btn-warning mt-2">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
@endsection