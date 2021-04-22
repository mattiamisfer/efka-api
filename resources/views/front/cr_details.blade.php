
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
					<a href="javascript:void(0)" class="page-numbers ">{{__('register.account_details')}}</a><i class="bx bx-chevron-right"></i>
					<a href="javascript:void(0)" class="page-numbers current">{{__('register.documents')}}</a>
				
				
			</div>
		</div>
		</div><br><br>
		<div class="contact-form-action">
			<form method="post" enctype="multipart/form-data" action={{route('main.store')}}>
				@csrf
				<input type="hidden" name="user_id" value="{{ request()->id }}">
				 		<div class="row">
							<div class="col-12">
									<div class="form-group">
										
										<input class="form-control" type="text" name="cr_number" placeholder="CR No:">
									</div>
									@error('cr_number')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
								</div>
							<h6> {{__('register.upload')}}</h6>
								<div class="col-12">
									<div class="form-group">
										
										<div class="file" style="padding-top:10px;">
								  <p> {{__('register.upload_commercial')}}</p>
                                        <input type="file" id="myFile" name="commercial">
                                    </div>
								
									</div>
									@error('commercial')
									<div class="alert alert-danger">Copy of Commercial Registry is required</div>
								@enderror
								</div>
								
	
								<div class="col-12">
									<div class="form-group">
										
										<div class="file" style="padding-top:10px;">
								  <p>{{__('register.upload_mun')}} </p>
                                        <input type="file" id="myFile" name="muncipal">
                                    </div>
									</div>
									@error('commercial')
									<div class="alert alert-danger">Copy of Municipal License is required</div>
								@enderror
								</div>
								
								<div class="col-12">
									<div class="form-group">
										
										<div class="file" style="padding-top:10px;">
								  <p>{{__("register.upload_tax")}}</p>
                                        <input type="file" id="myFile" name="tax">
                                    </div>
									</div>
									@error('tax')
									<div class="alert alert-danger">Copy of Tax Certificate is required</div>
								@enderror
								</div>
	
								
	
								<div class="col-12">
									<button class="default-btn" type="submit">
										 {{__("register.submit")}}
									</button>
								</div>

								
							</div>
			</form>
		</div>
	</div>
</div>
	@endsection
