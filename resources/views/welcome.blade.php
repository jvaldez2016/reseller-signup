@extends('layouts.partials.client.main')

@section('content')

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">BeauteDerm</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            @guest
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/register">Reseller Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/login">Log In</a>
            </li>
          </ul>
          @endguest
          @auth
          <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <h5 class="nav-link">Welcome <a href="/user/profile">{{Auth::user()->name}}</a></h5>

                </li>
                <li class="nav-item">
                    <h5 class="nav-link"><a href="{{ url(config('adminlte.logout_url', 'auth/logout')) }}">Log Out</a></h5>
                </li>
          </ul>
          @endauth
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white">
      <div class="masthead-content">
        <div class="container">
                @include('layouts.flash-message')
          <h2 class="masthead-subheading mb-0">Beautederm</h2>
          {{-- <h3 class="">Authorized Mega Distributor</h3> --}}
        @auth
        <div>
        <a href="#" class="btn btn-primary btn-xl rounded-pill mt-5">Make Order ? Click Here</a>
        </div>
        <div>
        <a href="/view_pdf" class="btn btn-primary btn-xl rounded-pill mt-5">View Current Item Price ? Click Here</a>
        </div>
        @endauth
        </div>
      </div>
      {{-- <div class="bg-circle-2 bg-circle"></div> --}}
    </header>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="img/01.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">

            </div>
          </div>
        </div>
      </div>
    </section>




@endsection
