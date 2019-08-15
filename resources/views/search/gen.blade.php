@extends('layouts.awal')


@section('title')

Genre of {{ $tit['nama'] }}

@endsection


@section('main')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p class="border-bottom slug">Genre Of {{ $tit['nama'] }}</p>
        </div>
        @forelse($get as $g)
        <div class="col-6 col-md-3 mb-3">
            <a href="{{ route('detail.anime',$g->judul) }}" class="link-none" title="{{ $g->judul }}">
                <div class="top">{!! str_limit($g->judul, 18) !!}</div>
                <div class="card det">
                    <div class="card-body p-0">
                        <img src="{{ asset('poster/'.$g->poster) }}" class="poster">
                    </div>
                </div>
            </a>
        </div>
        @empty
        <div class="col-md-12">
            <p class="text-center text-secondary h3">There's no post</p>
        </div>
        @endforelse


    </div>
</div>

@endsection


@section('sideInfo')


@endsection