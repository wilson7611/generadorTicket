{{-- <!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
 
<div class="container mt-5">        
<!-- Section: Design Block -->
<section class=" text-center text-lg-start">
    <style>
      .rounded-t-5 {
        border-top-left-radius: 0.5rem;
        border-top-right-radius: 0.5rem;
      }
  
      @media (min-width: 992px) {
        .rounded-tr-lg-0 {
          border-top-right-radius: 0;
        }
  
        .rounded-bl-lg-5 {
          border-bottom-left-radius: 0.5rem;
        }
      }
    </style>
    <div class="card mb-3">
      <div class="row g-0 d-flex align-items-center">
        <div class="col-lg-4 d-none d-lg-flex">
          <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" alt="Trendy Pants and Shoes"
            class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
        </div>
        <div class="col-lg-8">
          <div class="card-body py-5 px-md-5">
  
            <form action="{{route('login')}}" method="POST">
                @csrf
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" name="email" id="form2Example1" class="form-control" value="wilson@gmail.com" />
                <label class="form-label"  for="form2Example1">Correo Electronico</label>
              </div>
                </div>
                <div class="col-md-2"></div>
            </div>
              
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" name="password" id="form2Example2" class="form-control" value="admin123"/>
                <label class="form-label" for="form2Example2">Contraseña</label>
              </div>
                </div>
            </div>
              <!-- 2 column grid layout for inline styling -->
              <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                  <!-- Checkbox -->
                   <!-- Submit button -->
                 <button type="submit" class="btn btn-primary btn-block mb-4">Ingresar</button>
  
                </div>
  
                <div class="col">
                  <!-- Simple link -->
                  <a href="{{route('register')}}" class="">Registrarse</a>
                </div>
              </div>
  
             
            </form>
  
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->
</div>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html> --}}

@extends('layouts.app')
@section('content')
<div class="auth-page-wrapper pt-5">
  <!-- auth page bg -->
  <div class="auth-one-bg-position auth-one-bg"  id="auth-particles">
      <div class="bg-overlay"></div>

      <div class="shape">
          <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
              <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
          </svg>
      </div>
  </div>

  <!-- auth page content -->
  <div class="auth-page-content">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="text-center mt-sm-5 mb-4 text-white-50">
                      <div>
                          <a href="index" class="d-inline-block auth-logo">
                              <img src="http://127.0.0.1:8000/assets/images/logo-light.png" alt="" height="20">
                          </a>
                      </div>
                      <p class="mt-3 fs-15 fw-medium"></p>
                  </div>
              </div>
          </div>
          <!-- end row -->

          <div class="row justify-content-center">
              <div class="col-md-8 col-lg-6 col-xl-5">
                  <div class="card mt-4">

                      <div class="card-body p-4">
                          <div class="text-center mt-2">
                              <h5 class="text-primary">Bienvenido!</h5>
                             
                          </div>
                          <div class="p-2 mt-4">
                              <form action="{{route('login')}}" method="POST">
                                @csrf
                                    <div class="mb-3">
                                      <label for="username" class="form-label">Email</label>
                                      <input type="text" class="form-control " value="wilson@gmail.com" id="email" name="email" placeholder="Introducir Email">
                                                                          </div>

                                  <div class="mb-3">
                                      
                                      <label class="form-label" for="password-input">Contraseña</label>
                                      <div class="position-relative auth-pass-inputgroup mb-3">
                                          <input type="password" class="form-control pe-5 " name="password" placeholder="Introducir Contraseña" id="password-input" value="admin123">
                                          <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                                                  </div>
                                  </div>


                                  <div class="mt-4">
                                      <button class="btn btn-success w-100" type="submit">Ingresar</button>
                                  </div>
                              </form>
                          </div>
                      </div>
                      <!-- end card body -->
                  </div>
                  <!-- end card -->

                  <div class="mt-4 text-center">
                      <p class="mb-0">No tienes Cuenta Registrate ? <a href="{{route('register')}}" class="fw-semibold text-primary text-decoration-underline"> Registrarse </a> </p>
                  </div>

              </div>
          </div>
          <!-- end row -->
      </div>
      <!-- end container -->
  </div>
  <!-- end auth page content -->

  <!-- footer -->
  <footer class="footer">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="text-center">
                      <p class="mb-0 text-muted">&copy; <script>document.write(new Date().getFullYear())</script> Velzon. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!-- end Footer -->
</div>
@endsection