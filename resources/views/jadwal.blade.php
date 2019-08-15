@extends('layouts.awal')


@section('title', 'Jadwal Anime')

@section('main')

<div class="container">
	<div class="row">

		<div class="col-md-12">
			<div class="card-header slug" style="font-size:18px; background-color: #FFCC66;">Senin</span></div>
			<div class="card mb-4">
				<div class="card-body" style="background-color: #1b1b1b;">
					<div class="row">
						@forelse($senin as $sn)
						<div class="col-6 col-md-3 mb-2">
							<a href="" class="link-none" title="{{ $sn->series->judul }}">
								<div class="card jadwal" style="border: 0;">
									<div class="card-body p-0">
										<img src="{{ asset('poster/'.$sn->series->poster) }}" class="link-jadwal" style="width: 100%;height: 175px; border-radius: 5px; ">
									</div>
								</div>
							</a>
						</div>
						@empty
						<div class="text-center text-light h4" style="margin:auto;">
							<p>There's no Series</p>
						</div>
						@endforelse
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="card-header slug" style="font-size:18px; background-color: #FFCC66;">Selasa</span></div>
			<div class="card mb-4">
				<div class="card-body" style="background-color: #1b1b1b;">
					<div class="row">
						@forelse($selasa as $sl)
						<div class="col-6 col-md-3 mb-2">
							<a href="" title="{{ $sl->series->judul }}" class="link-none">
							<div class="card jadwal" style="border: 0;">
								<div class="card-body p-0">
									<img src="{{ asset('poster/'.$sl->series->poster) }}" class="link-jadwal" style="width: 100%;height: 175px; border-radius: 5px; ">
								</div>
							</div>
							</a>
						</div>
						@empty
						<div class="text-center text-light h4" style="margin:auto;">
							<p>There's no Series</p>
						</div>
						@endforelse
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="card-header slug" style="font-size:18px; background-color: #FFCC66;">Rabu</span></div>
			<div class="card mb-4">
				<div class="card-body" style="background-color: #1b1b1b;">
					<div class="row">
						@forelse($rabu as $rb)
						<div class="col-6 col-md-3 mb-2">
							<a href="" title="{{ $rb->series->judul }}" class="link-none">
							<div class="card jadwal" style="border: 0;">
								<div class="card-body p-0">
									<img src="{{ asset('poster/'.$rb->series->poster) }}" class="link-jadwal" style="width: 100%;height: 175px; border-radius: 5px; ">
								</div>
							</div>
							</a>
						</div>
						@empty
						<div class="text-center text-light h4" style="margin:auto;">
							<p>There's no Series</p>
						</div>
						@endforelse
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="card-header slug" style="font-size:18px; background-color: #FFCC66;">Kamis</span></div>
			<div class="card mb-4">
				<div class="card-body" style="background-color: #1b1b1b;">
					<div class="row">
						@forelse($kamis as $km)
						<div class="col-6 col-md-3 mb-2">
							<a href="" title="{{ $km->series->judul }}" class="link-none">
							<div class="card jadwal" style="border: 0;">
								<div class="card-body p-0">
									<img src="{{ asset('poster/'.$km->series->poster) }}" class="link-jadwal" style="width: 100%;height: 175px; border-radius: 5px; ">
								</div>
							</div>
							</a>
						</div>
						@empty
						<div class="text-center text-light h4" style="margin:auto;">
							<p>There's no Series</p>
						</div>
						@endforelse
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="card-header slug" style="font-size:18px; background-color: #FFCC66;">Jum'at</span></div>
			<div class="card mb-4">
				<div class="card-body" style="background-color: #1b1b1b;">
					<div class="row">
						@forelse($jumaat as $jm)
						<div class="col-6 col-md-3 mb-2">
							<a href="" title="{{ $jm->series->judul }}" class="link-none">
							<div class="card jadwal" style="border: 0;">
								<div class="card-body p-0">
									<img src="{{ asset('poster/'.$jm->series->poster) }}" class="link-jadwal" style="width: 100%;height: 175px; border-radius: 5px; ">
								</div>
							</div>
							</a>
						</div>
						@empty
						<div class="text-center text-light h4" style="margin:auto;">
							<p>There's no Series</p>
						</div>
						@endforelse
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="card-header slug" style="font-size:18px; background-color: #FFCC66;">Sabtu</span></div>
			<div class="card mb-4">
				<div class="card-body" style="background-color: #1b1b1b;">
					<div class="row">
						@forelse($sabtu as $sb)
						<div class="col-6 col-md-3 mb-2">
							<a href="" title="{{ $sb->series->judul }}" class="link-none">
							<div class="card jadwal" style="border: 0;">
								<div class="card-body p-0">
									<img src="{{ asset('poster/'.$sb->series->poster) }}" class="link-jadwal" style="width: 100%;height: 175px; border-radius: 5px; ">
								</div>
							</div>
							</a>
						</div>
						@empty
						<div class="text-center text-light h4" style="margin:auto;">
							<p>There's no Series</p>
						</div>
						@endforelse
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="card-header slug" style="font-size:18px; background-color: #FFCC66;">Minggu</span></div>
			<div class="card mb-4">
				<div class="card-body" style="background-color: #1b1b1b;">
					<div class="row">
						@forelse($minggu as $mg)
						<div class="col-6 col-md-3 mb-2">
							<a href="" title="{{ $mg->series->judul }}" class="link-none">
							<div class="card jadwal" style="border: 0;">
								<div class="card-body p-0">
									<img src="{{ asset('poster/'.$mg->series->poster) }}" class="link-jadwal" style="width: 100%;height: 175px; border-radius: 5px; ">
								</div>
							</div>
							</a>
						</div>
						@empty
						<div class="text-center text-light h4" style="margin:auto;">
							<p>There's no Series</p>
						</div>
						@endforelse
					</div>
				</div>
			</div>
		</div>


	</div>
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