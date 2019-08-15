<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link href="{{ asset('css/tinymce.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/all.css' )}}">
    <link rel="stylesheet" href="{{ asset('css/me.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/modal.css') }}">

    <!-- Script JS -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/all.js') }}"></script>
    <script src="{{ asset('js/tinymce.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/jqform.js') }}"></script>
    <script src="{{ asset('js/modal.js') }}"></script>


    <script>
      $(document).ready(function() {
          $('.select2').select2();

      });
    </script>
    
    

    <title>Uwunime | @yield('title')</title>
  </head>
  <body>
   	
    <nav style="background-color: #1891ac; padding: 10px;" class="shadow sticky-top">
      <span class="text-white h4" style="font-weight: bold;">Unimu</span>
    </nav>

    <div class="container mt-4 mb-5">
      <div class="row">
        <div class="col-md-3">
          <div class="card mb-3" style="border: 2px solid #1f5f8b;">
            <span style="background-color: #1f5f8b; border-radius: 3px 3px 0px 0px; padding: 10px; margin-top: -2px; font-size: 20px; color: white;"><i class="fa fa-chess-rook mr-2"></i>Dashboard</span>
            <div class="card-body">
              <ul class="nav flex-column">
                <li>
                  <a href="#anime" class="dash-link" data-toggle="collapse"><i class="fa fa-film mr-3"></i>Anime <span class="dropdown-toggle float-right"></span></a>
                  <div id="anime" class="collapse" style="background-color: #f4f4f4; border-top: 2px solid black; border-bottom: 2px solid black;">
                    <ul class="nav flex-column p-2 ml-2">
                      <li><a href="{{ route('home') }}" class="dash-link"><i class="fa fa-eye mr-3"></i>List anime</a></li>
                      <li><a href="{{ route('create.series') }}" class="dash-link"><i class="fa fa-plus mr-3"></i>Buat Series</a></li>
                      <li><a href="{{ route('create.episode') }}" class="dash-link"><i class="fa fa-plus mr-3"></i>Tambah Episode</a></li>
                    </ul>
                  </div>
                </li>
                <li>
                  <a href="{{ route('dash.jadwal') }}" class="dash-link"><i class="fa fa-calendar-week mr-3"></i>Jadwal</a>
                </li>
                <li>
                  <a class="dash-link" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                      <i class="fa fa-sign-out-alt" style="margin-right: 14px;"></i>Logout
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-9">
          <div class="card shadow" style="border-radius: 0px; border: 3px solid #1f5f8b;">
            <div class="card-body">
              @yield('content')
            </div>
          </div>
        </div>
      </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
  </body>
</html>
