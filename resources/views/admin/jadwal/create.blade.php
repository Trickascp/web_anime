@extends('layouts.dashboard')


@section('title', 'Create Series')


@section('content')

@if(isset($message))

	<p>{{ message }}</p>

@endif
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="card shadow m-3">
				<div class="card-body">
					<a href="{{ route('home') }}" class="btn btn-primary btn-sm mb-2" title="Back To Dashboard">Back</a>
						
					<p class="border-bottom slug text-center">Jadwalkan Anime ({{ $hari['nama'] }})</p>

					<form method="POST" action="{{ route('insert.jadwal') }}" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<select name="series" class="form-control select2" required>
								<option value=""><-- Series --></option>
								@foreach($all as $s)
								<option value="{{ $s->id }}">{{ $s->judul }}</option>
								@endforeach
							</select>
						</div>
						<input type="hidden" name="hari" value="{{ $id }}" readonly>
						<div class="text-right">
							<button class="btn btn-success">Jadwalkan</button>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>

<script>
	
	$(document).ready(function(){

		$('.select2').select2();

	})

</script>



@endsection