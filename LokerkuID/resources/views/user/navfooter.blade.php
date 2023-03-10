<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LokerkuID</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img style="width: 120px; margin-left:50px;" src="{{ asset('assets/Logo LokerkuID.png') }}" alt="" srcset=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="findjob">Find a Job</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="training">Training</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="article">Article</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about">About Us</a>
              </li>
            </ul>
          </div>
          <div style="width: 300px;" class="container text-end">
            {{-- <a href="log">
                <button class="btn btn-secondary">
                    Login
                </button>
            </a>
            <div class="user dropdown">
              <button class="btn btn-outline-secondary dropdown-toggle" type="button">
                <img style="width: 30px;" src="assets/user.png">
                Login
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Logout</a></li>
              </ul> --}}
              <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
            </div>
          </div>
        </div>
      </nav>

      @yield('body')
          <footer>
            <div class="container-fluid-100" style="background-color: rgb(96, 96, 96);">
              <div class="container text-center">
                <!-- Stack the columns on mobile by making one full-width and the other half-width -->
                <div class="row">
                  <div class="col-md-6">
                    <h2 class="mt-5 text-white">
                      Contact Us
                    </h2>
                    <p class="text-white">
                      <img style="width: 20px; margin-right: 10px; align-items: flex-start;" src="assets/location-pin.png">
                      Jl. Puri Kembangan 21, RT.6/RW.5, Kembangan Sel., Kec. Kembangan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11610
                    </p>
                    <p class="text-white">
                      <img style="width: 20px; margin-right: 10px;" src="assets/phone-call.png" alt="">
                      085156778777
                    </p>
                    <p class="text-white">
                      <img style="width: 20px; margin-right: 10px;" src="assets/email.png" alt="">
                      admin@lokerkuid.com
                    </p>
                  </div>
                  <div style="margin-left:150px;" class="col-8 col-md-4">
                    <img style="width: 300px; margin-top:60px;" src="{{ asset('assets/Logo LokerkuID putih.png') }}" alt="">
                    <h6 class="text-white">Copyright 2022</h6>
                  </div>
          </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
