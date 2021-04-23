
@extends('layouts.app')

@section('content')
<div class="container">
			
	<div class="log-in-area">
	<div class="row">
		<div class="col-lg-12 col-md-12">
			<div class="pagination-area">
				<!--
				<a href="#" class="prev page-numbers">
					<i class="bx bx-chevron-left"></i>
				</a>
				-->
				<span class="" aria-current="page">
				<a href="javascript:void(0)" class="page-numbers ">{{__('register.basic_info')}}</a></span><i class="bx bx-chevron-right"></i>
				<a href="javascript:void(0)" class="page-numbers ">{{ __('register.branch_details')}}</a><i class="bx bx-chevron-right"></i>
				<a href="javascript:void(0)" class="page-numbers current">{{__('register.account_details')}}</a><i class="bx bx-chevron-right"></i>
				<a href="javascript:void(0)" class="page-numbers">{{__('register.documents')}}</a>
				
				
			</div>
		</div>
		</div><br><br>
		<div class="contact-form-action">
			<form method="post" enctype="multipart/form-data" action={{route('main.account')}}>
				@csrf
				<input type="hidden" name="user_id" value="{{ request()->id }}">
				<div class="row">
					<div class="col-12">
						<div class="form-group">
							
							<input class="form-control" type="text" name="bank_ac" placeholder="{{__('register.bank_ac')}}">
						</div>
						@error('bank_ac')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					</div>
					

					<div class="col-12">
						<div class="form-group">
							
							<input class="form-control" type="text" name="branch_code" placeholder="{{__('register.branch_code')}}">
						</div>
						@error('branch_code')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					</div>
					<div class="col-12">
						<div class="form-group">
							
							<input class="form-control" type="text" name="account_holder" placeholder="{{__('register.account_holder')}}">
						</div>
						@error('account_holder')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					</div>
					
					<div class="col-12">
						<div class="form-group">
							<h6>{{__("register.upload")}}</h6>
							<div class="file" style="padding-top:10px;">
					  <p> {{__('register.upload_bank')}}</p>
							<input type="file" id="myFile" name="bank">
						</div>
						</div>
						@error('bank')
						<div class="alert alert-danger"> {{$message}}

						</div>
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
