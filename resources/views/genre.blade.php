@extends('layouts.awal')


@section('title', 'List Genre')

@section('main')

<p class="text-center border-bottom" style="font-weight: bolder; font-size: 28px;">Choose Your Genre</p>
<div align="center" class="list-genre">
	@foreach($genre as $a)
	<a href="{{ route('s.genre', $a->id) }}" class="btn btn-genre mb-1">{{ $a->nama }}</a>
	@endforeach
</div>

@endsection


@section('sideInfo')

<p class="border-bottom slug m-0">Recently Update</p>
<div class="scroll">
	@forelse($recent as $r)
	<div class="row p-2">

	        <div class="col-md-12 recent p-0">
	        	<a href="{{ route('video.anime', [$r->series->judul, $r->id]) }}" class="p-2 link-none recent-link">
	            <span>{{ $r->series->judul }}<br><div class="btn btn-rating btn-sm text-dark"><i class="fa fa-play mr-2"></i>{{ $r->nama }}</div> - <span class="text-secondary">{{ $r->created_at->diffForHumans() }}</span></span>
	            </a>
	        </div>
	</div>
	@empty
	<p class="text-center text-secondary h3">There's no post</p>
	@endforelse
</div>


@endsection