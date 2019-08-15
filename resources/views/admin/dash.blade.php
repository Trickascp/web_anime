@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')



<div class="container">
	<div class="row">
		<div class="col-md-12">
			<p class="border-bottom slug">List Anime</p>
			<table class="table text-center">
				<thead>
					<th width="30px">Poster</th>
					<th width="250px">Judul</th>
					<th>Modify</th>
				</thead>
				<tbody id="tbdy">
					@foreach($series as $s)
					<tr>
						<td><img src="{{ asset('poster/'.$s->poster) }}" class="rounded" style="width: 100px; height: 100px;"></td>
						<td>{{ str_limit($s->judul, 35) }}</td>
						<td>
							<a href="{{ route('detail.anime', $s->judul) }}" class="btn btn-info text-light btn-sm mb-1" title="Preview on Web"><i class="fa fa-eye"></i></a>
							<a href="{{ route('edit.series', $s->judul) }}" class="btn btn-warning btn-sm mb-1" title="Edit Series"><i class="fa fa-edit"></i></a>
							<a href="{{ route('list.epsd', $s->judul) }}" class="btn btn-primary btn-sm mb-1" title="Manage Episode"><i class="fa fa-cogs"></i></a>
							<a href="{{ route('delete.series', $s->judul) }}" class="btn btn-danger  btn-sm mb-1" title="Delete Series"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{{ $series->links() }}
		</div>
	</div>
</div>




@endsection