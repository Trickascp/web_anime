@extends('layouts.dashboard')


@section('title', 'Create Series')


@section('content')


<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="card shadow m-3">
				<div class="card-body">
					<a href="{{ route('home') }}" class="btn btn-primary btn-sm mb-2" title="Back To Dashboard">Back</a>
						
					<p class="border-bottom slug text-center">Edit Series</p>
					<form action="{{ route('update.series', $e->judul) }}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<input type="text" name="judul" placeholder="Judul Series" class="form-control" value="{{ $e->judul }}">
						</div>
						<div class="form-group">
							<input type="text" name="rating" placeholder="Rating Series" class="form-control" value="{{ $e->rating }}">
						</div>
						<div class="form-group">
							<textarea name="sinopsis" class="form-control" rows="3" placeholder="Sinopsis">{{ $e->sinopsis }}</textarea>
						</div>
						<div class="form-group">
							<select name="genre[]" class="form-control select2" multiple="multiple">
								@foreach($genre as $g => $genre)
								<option value="{{ $g }}">{{ $genre }}</option>
								@endforeach
							</select>	
						</div>
						<div class="form-group">
							<select name="status" class="form-control">
								<option value="{{ $e->status }}">{{ $e->status }}</option>
								<option value=""><-- Status --></option>
								<option value="Ongoing">Ongoing</option>
								<option value="Completed">Completed</option>
							</select>
						</div>
						<div class="form-group">
							<label>Poster</label>
							<input type="file" name="poster" class="form-control p-1">
						</div>
						<input type="hidden" name="id" value="{{ $e->id }}" readonly>
						<div class="text-right">
							<button class="btn btn-success">Update</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>



<script>
	
	$(document).ready(function(){

		$('.select2').select2().val({!! json_encode($e->genre()->allRelatedIds()) !!}).trigger('change');;

	})

</script>


@endsection