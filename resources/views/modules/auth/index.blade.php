@extends('layouts/main')
@section('titulo', 'Login de usuario')
@section('contenido')
    <div class="container">
        <div class="row mt-4">
            <div class="col">
                <h2>Help Desk Mate</h2>
                <form action="{{ route('auth-logear') }}" method="POST">
                    @csrf
                    @method('POST')
                    <label for="name">Usuario</label>
                    <input type="text" id="name" name="name" class="form-control">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                    <button class="btn btn-primary mt-2">Entrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection