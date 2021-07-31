
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
				<div class="pagination-area">
					<!--
					<a href="#" class="prev page-numbers">
						<i class="bx bx-chevron-left"></i>
					</a>
					-->
					<span class="" aria-current="page">
					<a href="javascript:void(0)" class="page-numbers current ">{{__('register.basic_info')}}</a></span><i class="bx bx-chevron-right"></i>
					<a href="javascript:void(0)" class="page-numbers">{{__('register.documents')}}</a>
					<a href="javascript:void(0)" class="page-numbers ">{{ __('register.branch_details')}}</a><i class="bx bx-chevron-right"></i>
					{{-- <a href="javascript:void(0)" class="page-numbers ">{{__('register.account_details')}}</a><i class="bx bx-chevron-right"></i> --}}
				
					
				   
				</div>
			</div>
			</div><br><br>
			<div class="contact-form-action">
				<form method="post" action="{{ route('main.first')}}">
					@csrf
					<div class="row">
						<div class="col-4">
							<div class="form-group">
								
								<input class="form-control" type="text" name="first_name" placeholder="{{__('register.first_name')}}">
				</div>
				@error('first_name')
				<div class="alert alert-danger">{{ $message }}</div>
			@enderror
								
						</div>
						<div class="col-4">
							<div class="form-group">
								
								<input class="form-control" type="text" name="middle_name" placeholder="{{__('register.midlde_name')}}">
					
					
					
							</div>
							@error('middle_name')
							<div class="alert alert-danger">{{ $message }}</div>
						@enderror
						</div>
						<div class="col-4">
							<div class="form-group">
								
								<input class="form-control" type="text" name="last_name" placeholder="{{__('register.last_name')}}">
							</div>
							@error('last_name')
							<div class="alert alert-danger">{{ $message }}</div>
						@enderror
											
						</div>

						<div class="col-12">
							<div class="form-group">
								
								<input class="form-control" type="email" name="email" placeholder="{{__('register.email')}}">
							</div>
							@error('email')
							<div class="alert alert-danger">{{ $message }}</div>
						@enderror
											
						</div>


						<div class="col-12">
							<div class="form-group">
								
								<input class="form-control" type="password" name="password" placeholder="{{__('register.password')}}">
							</div>
							@error('password')
							<div class="alert alert-danger">{{ $message }}</div>
						@enderror
											
						</div>

						<div class="col-12">
							<div class="form-group">
								
								<input class="form-control" type="password" name="password_confirmation" placeholder="{{__('register.password_confirmation')}}">
							</div>
							@error('password_confirmation')
							<div class="alert alert-danger">{{ $message }}</div>
						@enderror
											
						</div> 










						
						<div class="col-12">
							<div class="form-group">
								
								<input class="form-control" type="phone" name="phone" placeholder="{{__('register.contact_number')}}">
							</div>
							@error('phone')
							<div class="alert alert-danger">{{ $message }}</div>
						@enderror
											
						</div>
						<div class="col-12">
							<div class="form-group">
								<label>{{__('register.category_name')}}</label><br>
								
							</div>
						</div>

						@foreach ($category->chunk(2) as $key => $chunk)

						@foreach ($chunk as $categories )
							
						{{-- {{$categories}} --}}
							
					
						<div class="col-6">
							<div class="form-group">
								
								<input type="checkbox" id="vehicle1" name="category[]" value="{{$categories->id}}">
<label for="category[]" style="font-size: 14px;">  {{$categories->name}} </label><br>
 
							</div>
						</div>
						@endforeach
						@endforeach
						<div class="col-12">
 
							<p> <label class="inline btn">
			   <input type="checkbox" name="checkbox">   {{__('register.agree')}} <a href="{{ route('setting.one')}}"> {{__('register.terms')}}</a>
		   </label></p>

		   @error('checkbox')
		   <div class="alert alert-danger">{{ $message }}</div>
	   @enderror
	 
						</div>
						<div class="col-12">
							<button class="default-btn" type="submit">
								{{__('register.save_continue')}}
							</button>
						</div>

					

						

						
					</div>
				</form>
			</div>
		</div>
	</div>
	@endsection
