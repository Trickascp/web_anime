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
						
					<p class="border-bottom slug text-center">Tambah Episode</p>

					<form method="POST" action="{{ route('insert.episode') }}" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<select name="series" class="form-control select2" required>
								<option value=""><-- Series --></option>
								@foreach($series as $s)
								<option value="{{ $s->id }}">{{ $s->judul }}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<input type="text" name="nama" class="form-control" placeholder="Judul Episode" required>
						</div>
						<div class="form-group">
							<input type="file" name="video" class="form-control p-1 mb-2" required>
							<div class="progress mt-1" style="height: 17px;">
							    <div class="bar"></div>
							    <div class="percent">0%</div>
							</div>
						</div>
						<div class="text-right">
							<input type="submit" id="btn"  value="Create" class="btn btn-success">
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

<script>
	
	$(function() {
         $(document).ready(function()
         {
            var bar = $('.bar');
            var percent = $('.percent');

      $('form').ajaxForm({
        beforeSend: function() {
        	$("#btn").prop("disabled", true);
            var percentVal = '0%';
            bar.width(percentVal)
            percent.html(percentVal);
        },
        uploadProgress: function(event, position, total, percentComplete) {
            var percentVal = percentComplete + '%';
            bar.width(percentVal)
            percent.html(percentVal);
        },
        complete: function(xhr) {
            window.location.href = "/dashboard/episode/tambah";
            alert("Satu Episode berhasil ditambahkan")
        }
      });
   }); 
 });

</script>


@endsection