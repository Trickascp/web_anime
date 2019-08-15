<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Unimu | @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/all.js') }}"></script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/me.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/all.css') }}">
</head>
<body>
    
    <div class="container mt-3 mb-5">
        <div class="row">
            <div class="col-md-12">
                @include('layouts.nav')
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-2">
                    <div class="card-body">
                        @yield('main')
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="height: 450px;">
                    <div class="card-body">
                        @yield('sideInfo')
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
