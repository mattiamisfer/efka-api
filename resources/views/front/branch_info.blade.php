
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
					<a href="javascript:void(0)" class="page-numbers current">{{ __('register.branch_details')}}</a><i class="bx bx-chevron-right"></i>
					<a href="javascript:void(0)" class="page-numbers ">{{__('register.account_details')}}</a><i class="bx bx-chevron-right"></i>
					<a href="javascript:void(0)" class="page-numbers">{{__('register.documents')}}</a>
					
				
				
			</div>
		</div>
		</div><br><br>
		<div class="contact-form-action">
			<form method="post" action="{{ route('main.basic')}}">
				@csrf

				<input type="hidden" name="user_id" value="{{ request()->id }}">
				<div class="row ">
					<div class="col-12 input_fields_wrap">
								<div class="form-group">
									<label>{{ __('register.branch_details')}}  
									</label>
									<textarea name="branch[]" class="form-control" id="branch" cols="30" rows="10" required data-error="Write your message"></textarea>
									<div class="help-block with-errors"></div>
								</div>
							</div>
					
<div class="col-12">
						<div class="form-group">
							<input type="button"  class="add_field_button" value="{{ __('register.save_add_new_branch')}}">
							
						</div>
					</div>
					

					<div class="col-12">
						<button class="default-btn" type="submit">
							 {{ __('register.save_continue')}}
						</button>
					</div>

					
				</div>
			</form>
		</div>
	</div>
</div>
	@endsection
