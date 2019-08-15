@extends('layouts.awal')


@section('title', 'Home')


@section('main')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p class="border-bottom slug">News Update</p>
        </div>
        @forelse($get as $g)
        <div class="col-6 col-md-3 mb-3">
            <a href="{{ route('detail.anime',$g->series->judul) }}" class="link-none" title="{{ $g->series->judul }}">
                <div class="top">{!! str_limit($g->series->judul, 18) !!}</div>
                <div class="card det">
                    <div class="card-body p-0">
                        <img src="{{ asset('poster/'.$g->series->poster) }}" class="poster">
                    </div>
                </div>
                <div class="bottom">{{ $g->nama }}</div>
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


<p class="border-bottom slug">Top Anime</p>
@forelse($rating as $r)
<a href="{{ route('detail.anime',$r->judul) }}" class="link-none" title="See This Series">
    <div class="row recent">
        <div class="col-md-4">
            <img src="{{ asset('poster/'.$r->poster) }}" style="width: 100%; height: 100px;">
        </div>
        <div class="col-md-8">
            <span>{{ $r->judul }}<br><div class="btn btn-rating btn-sm text-dark"><i class="fa fa-star mr-2"></i>{{ $r->rating }}</div></span>
        </div>
    </div>
</a>
@empty
<p class="text-center text-secondary h3">There's no post</p>
@endforelse

@endsection
