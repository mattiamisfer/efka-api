
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
				
					<a href="javascript:void(0)" class="page-numbers">{{__('register.documents')}}</a><i class="bx bx-chevron-right"></i>
	
					<a href="javascript:void(0)" class="page-numbers current">{{ __('register.branch_details')}}</a>
 					
				
				
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

					<div class="col-md-12">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d927764.3557892225!2d46.26203486837127!3d24.724150292130087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03890d489399%3A0xba974d1c98e79fd5!2sRiyadh%20Saudi%20Arabia!5e0!3m2!1sen!2sin!4v1630065469734!5m2!1sen!2sin" width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
					

					<div class="col-12">
						<button class="default-btn" type="submit">
							 {{ __('register.submit')}}
						</button>
					</div>

					
				</div>
			</form>
		</div>
	</div>
</div>
	@endsection
