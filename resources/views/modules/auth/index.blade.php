@extends('layouts/login')
@section('contenido')
    

    <div class="container-fluid ps-md-0">
        <div class="row g-0">
          <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
          <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
              <div class="container">
                <div class="row">
                  <div class="col-md-9 col-lg-8 mx-auto">
                    <h3 class="login-heading mb-4">Bienvenido a HDM</h3>
      
                    <!-- Sign In Form -->
                    <form action="{{ route('auth-logear') }}" method="POST">
                        @csrf
                        @method('POST')
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nombre de usuario">
                        <label for="name">Nombre de usuario</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                        <label for="password">Password</label>
                      </div>
      
                      
      
                      <div class="d-grid">
                        <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">Sign in</button>
                        
                      </div>
      
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
@endsection