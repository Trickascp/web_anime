<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Unimu | {{ $get->judul }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/all.js') }}"></script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/me.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/all.css') }}">
</head>

<body>
    
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                @include('layouts.nav')
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                    
                                <div class="col-md-4">
                                    <img src="{{ asset('poster/'.$get->poster) }}" class="rounded" style="width: 100%; height: 350px;">
                                    <div class="text-center" style="font-weight: bold; font-size: 18px;">{{ $get->judul }}</div>
                                    <p class="text-center" style="font-weight: bolder;">                                        
                                            @if($get->status == "Completed")
                                                <span class="text-success">Completed</span>
                                            @else
                                                <span class="text-primary">Ongoing</span>
                                            @endif
                                         | {{ $get->release }} | 
                                         <span class="btn-rating btn-sm p-1 rounded ml-2"><i class="fa fa-star mr-2"></i>{{ $get->rating }}</span>
                                     </p>
                                </div>
                                <div class="col-md-8">
                                    <div class="card mb-3 shadow-sm">
                                        <div class="card-body">
                                            <span style="font-weight: bold;">Sinopsis:</span>
                                            <p id="sinopsis" class="text-justify">{{ $get->sinopsis }}</p>
                                            <div class="mb-1" style="font-weight: bold;">Genre:</div>
                                            @foreach($get->genre as $g)
                                            <a href="{{ route('s.genre', $g->id) }}" class="btn btn-sm btn-genre mb-1">{{ $g->nama }}</a>
                                            @endforeach
                                                                                    
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <div class="p-3" style="background-color: #FFCC66; font-weight: bold;">
                                        <span class="" style="font-size: 20px;">List Episode</span>
                                    </div>

                                    <div class="card list-epsd" style="background-color: #1b1b1b;">
                                        <div class="card-body text-center">
                                            @foreach($epsd as $e)
                                            <a href="{{ route('video.anime', [$e->series->judul, $e->id]) }}" class="btn btn-epsd mb-2">{{ $e->nama }}</a>
                                            @endforeach
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


<script>
    
    $(document).ready(function(){
        var sinop = $('#sinopsis').html()
        var less  = sinop.substr(0, 250)
        
        if(sinop.length > 250)
        {
            $('#sinopsis').html(less).append("...<br> <a href='' class='read-more'> Read More</a>")
        }else{
            $('#sinopsis').html(sinop)
        }

        $("body").on("click", '.read-more', function(event){
            event.preventDefault();
            $(this).parent("#sinopsis").html(sinop).append("<br> <a href='' class='read-less'> Show Less</a>")
        })

        $("body").on("click", '.read-less', function(event){
            event.preventDefault();
            $(this).parent("#sinopsis").html(less).append("...<br> <a href='' class='read-more'> Read More</a>")
        })


    })

</script>

</body>