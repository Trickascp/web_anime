@extends('layouts.dashboard')

@section('title', 'Jadwal Anime')

@section('content')


<div class="container">
	<div class="row">

		<div class="col-md-12">
			<div class="card-header slug">Senin <span class="float-right"><a href="{{ route('create.jadwal',1) }}" class="btn btn-success">+</a></span></div>
			<div class="card mb-4">
				<div class="card-body">
					<div class="row">
						@forelse($senin as $sn)
						<div class="col-6 col-md-3 mb-2">
							<div class="card" style="border: 0;">
								<div class="card-body p-0">
									<img src="{{ asset('poster/'.$sn->series->poster) }}" style="width: 100%;height: 175px; border-radius: 5px; ">
								</div>
							</div>
							<div class="bottom-trash">
								<a href="{{ route('delete.jadwal', [1,$sn->series->id]) }}" class="link-none text-light" style="display: block;" title="Delete Series From Senin"><i class="fa fa-trash"></i></a>
							</div>
						</div>
						@empty
						<div class="text-center text-secondary h4" style="margin:auto;">
							<p>There's No Post</p>
						</div>
						@endforelse
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="card-header slug">Selasa <span class="float-right"><a href="{{ route('create.jadwal',2) }}" class="btn btn-success">+</a></span></div>
			<div class="card mb-4">
				<div class="card-body">
					<div class="row">
						@forelse($selasa as $sl)
						<div class="col-6 col-md-3 mb-2">
							<div class="card" style="border: 0;">
								<div class="card-body p-0">
									<img src="{{ asset('poster/'.$sl->series->poster) }}" style="width: 100%;height: 175px; border-radius: 5px; ">
								</div>
							</div>
							<div class="bottom-trash">
								<a href="{{ route('delete.jadwal', [2,$sl->series->id]) }}" class="link-none text-light" style="display: block;" title="Delete Series From Senin"><i class="fa fa-trash"></i></a>
							</div>
						</div>
						@empty
						<div class="text-center text-secondary h4" style="margin:auto;">
							<p>There's No Post</p>
						</div>
						@endforelse
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="card-header slug">Rabu <span class="float-right"><a href="{{ route('create.jadwal',3) }}" class="btn btn-success">+</a></span></div>
			<div class="card mb-4">
				<div class="card-body">
					<div class="row">
						@forelse($rabu as $rb)
						<div class="col-6 col-md-3 mb-2">
							<div class="card" style="border: 0;">
								<div class="card-body p-0">
									<img src="{{ asset('poster/'.$rb->series->poster) }}" style="width: 100%;height: 175px; border-radius: 5px; ">
								</div>
							</div>
							<div class="bottom-trash">
								<a href="{{ route('delete.jadwal', [3,$rb->series->id]) }}" class="link-none text-light" style="display: block;" title="Delete Series From Senin"><i class="fa fa-trash"></i></a>
							</div>
						</div>
						@empty
						<div class="text-center text-secondary h4" style="margin:auto;">
							<p>There's No Post</p>
						</div>
						@endforelse
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="card-header slug">Kamis <span class="float-right"><a href="{{ route('create.jadwal',4) }}" class="btn btn-success">+</a></span></div>
			<div class="card mb-4">
				<div class="card-body">
					<div class="row">
						@forelse($kamis as $km)
						<div class="col-6 col-md-3 mb-2">
							<div class="card" style="border: 0;">
								<div class="card-body p-0">
									<img src="{{ asset('poster/'.$km->series->poster) }}" style="width: 100%;height: 175px; border-radius: 5px; ">
								</div>
							</div>
							<div class="bottom-trash">
								<a href="{{ route('delete.jadwal', [4,$km->series->id]) }}" class="link-none text-light" style="display: block;" title="Delete Series From Senin"><i class="fa fa-trash"></i></a>
							</div>
						</div>
						@empty
						<div class="text-center text-secondary h4" style="margin:auto;">
							<p>There's No Post</p>
						</div>
						@endforelse
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="card-header slug">Jumaat <span class="float-right"><a href="{{ route('create.jadwal',5) }}" class="btn btn-success">+</a></span></div>
			<div class="card mb-4">
				<div class="card-body">
					<div class="row">
						@forelse($jumaat as $jm)
						<div class="col-6 col-md-3 mb-2">
							<div class="card" style="border: 0;">
								<div class="card-body p-0">
									<img src="{{ asset('poster/'.$jm->series->poster) }}" style="width: 100%;height: 175px; border-radius: 5px; ">
								</div>
							</div>
							<div class="bottom-trash">
								<a href="{{ route('delete.jadwal', [5,$jm->series->id]) }}" class="link-none text-light" style="display: block;" title="Delete Series From Senin"><i class="fa fa-trash"></i></a>
							</div>
						</div>
						@empty
						<div class="text-center text-secondary h4" style="margin:auto;">
							<p>There's No Post</p>
						</div>
						@endforelse
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="card-header slug">Sabtu <span class="float-right"><a href="{{ route('create.jadwal',6) }}" class="btn btn-success">+</a></span></div>
			<div class="card mb-4">
				<div class="card-body">
					<div class="row">
						@forelse($sabtu as $sb)
						<div class="col-6 col-md-3 mb-2">
							<div class="card" style="border: 0;">
								<div class="card-body p-0">
									<img src="{{ asset('poster/'.$sb->series->poster) }}" style="width: 100%;height: 175px; border-radius: 5px; ">
								</div>
							</div>
							<div class="bottom-trash">
								<a href="{{ route('delete.jadwal', [6,$sb->series->id]) }}" class="link-none text-light" style="display: block;" title="Delete Series From Senin"><i class="fa fa-trash"></i></a>
							</div>
						</div>
						@empty
						<div class="text-center text-secondary h4" style="margin:auto;">
							<p>There's No Post</p>
						</div>
						@endforelse
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="card-header slug">Minggu <span class="float-right"><a href="{{ route('create.jadwal',7) }}" class="btn btn-success">+</a></span></div>
			<div class="card mb-4">
				<div class="card-body">
					<div class="row">
						@forelse($minggu as $mg)
						<div class="col-6 col-md-3 mb-2">
							<div class="card" style="border: 0;">
								<div class="card-body p-0">
									<img src="{{ asset('poster/'.$mg->series->poster) }}" style="width: 100%;height: 175px; border-radius: 5px; ">
								</div>
							</div>
							<div class="bottom-trash">
								<a href="{{ route('delete.jadwal', [7,$mg->series->id]) }}" class="link-none text-light" style="display: block;" title="Delete Series From Senin"><i class="fa fa-trash"></i></a>
							</div>
						</div>
						@empty
						<div class="text-center text-secondary h4" style="margin:auto;">
							<p>There's No Post</p>
						</div>
						@endforelse
					</div>
				</div>
			</div>
		</div>


	</div>
</div>



@endsection