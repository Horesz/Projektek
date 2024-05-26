<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
  <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

</head>
@extends('layouts.app')
@include('layouts.header')

<section id="login__section" class="vh-100 gradient-custom ">

      <div class="form-group">
              <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                  <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                      <div class="card-body p-5 text-center">
                        <div class="mb-md-5 mt-md-4 pb-5 login">
                        <h1 class="fw-bold mb-2 ">Üdvözlünk a</h1>
                          <h1 class="fw-bold mb-2 ">Cica Learning-en! <i class='bx bxs-cat' ></i></h1>
                          <br><br>
                         
                          <div class="row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                              <div class="card" style="background-color: #4F545C; color: white;">
                                <div class="card-body">
                                  <p class="card-text">Van már fiókod? Jelentkezz BE!</p>
                                  <a href="{{ route('login') }}" class="btn btn-primary" style="background-color: #c0d500; border-color: #c0d500">Bejelentkezés</a>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="card" style="background-color: #4F545C; color: white;">
                                <div class="card-body">
                                  <p class="card-text">Nincs még fiókod? Regisztrálj itt!</p>
                                  <a href="{{ route('register') }}" class="btn btn-primary" style="background-color: #2b4568; border-color: #2b4568">Regisztráció</a>
                                </div>
                              </div>
                            </div>
                          </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
      </div>