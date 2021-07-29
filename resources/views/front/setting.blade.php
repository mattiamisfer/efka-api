
@extends('layouts.app')

@section('content')
	
 
	<div class="container">
	
		<div class="log-in-area">
		<div class="row">


			<div class="col-lg-12 col-md-12">
				@if (Session::has('msg'))
				<div class="alert alert-success">
			 
					  {{ Session::get('msg') }} 
				 
				</div>
			@endif
			 
			</div>
			</div><br><br>
			<div class="contact-form-action">
				@foreach ($setting as $item)

				{!! $item->content !!}
					
				@endforeach
				 





			</div>
		</div>
	</div>
	@endsection
