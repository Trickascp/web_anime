@extends('layouts.awal')


@section('title')
Playing {{ $vid->series->judul }} Episode {{ $vid->nama }}
@endsection

@section('main')

<div class="p-3 mt-2" style="background-color: #FFCC66; font-weight: bold;">
						<span style="font-style: 18px;">Youkoso Jitsuryoku Shijou Shugi no Kyoushitsue - season 2</span>
						<br>
					</div>
					<video controls="controls" width="100%" height="330px" autoplay="off" style="border: 2px solid #FFCC66;">
						<source src="{{ asset('video/'.$vid->video) }}" type="video/mp4">
					</video>
					<div class="p-2 text-center" style="background-color: #FFCC66; margin-top: -7px;">
						<a href="{{ route('video.anime', [$vid->series->judul, $prev]) }}" class="btn btn-genre btn-sm" title="previous Episode"><<</a>
						<span class="btn btn-genre btn-sm">{{ $vid->nama }}</span>
						<a href="{{ route('video.anime', [$vid->series->judul, $next]) }}" class="btn btn-genre btn-sm" title="Next Episode">>></a>

					</div>
					<div class="p-3 mt-2" style="background-color: #FFCC66; font-weight: bold;">
						<span class="" style="font-size: 20px;">List Episode <a href="{{ route('detail.anime',$vid->series->judul) }}" class="btn btn-genre float-right" title="Detail Series">Detail</a></span>
					</div>
					<div class="card list-epsd" style="background-color: #1b1b1b;">
						<div class="card-body text-center">
							@foreach($all as $a)
							<a href="" class="btn btn-epsd mb-2">{{ $a->nama }}</a>
							@endforeach
						</div>
					</div>

@endsection

@section('sideInfo')

<p class="border-bottom slug m-0">Recently Update</p>
@forelse($recent as $r)
<div class="row p-2">

        <div class="col-md-12 recent p-0">
        	<a href="{{ route('video.anime', [$r->series->judul, $r->id]) }}" class="p-2 link-none recent-link" title="{{ $r->series->judul }} Episode {{ $r->nama }}">
            <span>{{ $r->series->judul }}<br><div class="btn btn-rating btn-sm text-dark"><i class="fa fa-play mr-2"></i>{{ $r->nama }}</div> - <span class="text-secondary">{{ $r->created_at->diffForHumans() }}</span></span>
            </a>
        </div>
</div>
@empty
<p class="text-center text-secondary h3">There's no post</p>
@endforelse

@endsection