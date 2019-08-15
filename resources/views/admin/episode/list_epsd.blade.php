@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')



<div class="container">
	<div class="row">
		<div class="col-md-12">
			<p class="border-bottom slug">List Episode</p>
			<table class="table text-center">
				<thead>
					<th width="250px">Nama Episode</th>
					<th>Modify</th>
				</thead>
				<tbody id="tbdy">
					@foreach($get as $e)
					<tr>
						<td>{{ $e->nama }}</td>
						<td>
							<a href="{{ route('delete.episode', $e->id) }}" class="btn btn-danger  btn-sm mb-1" title="Delete Series"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{{ $get->links() }}
		</div>
	</div>
</div>




@endsection