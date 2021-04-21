
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
					<span class="" aria-current="page"><a href="index.html" class="page-numbers current">{{__('register.basic_info')}}</a></span><i class="bx bx-chevron-right"></i>
					<a href="branch_location.html" class="page-numbers ">{{ __('register.branch_details')}}</a><i class="bx bx-chevron-right"></i>
					<a href="bank_account_details.html" class="page-numbers">{{__('register.account_details')}}</a><i class="bx bx-chevron-right"></i>
					<a href="cr_details.html" class="page-numbers">{{__('register.documents')}}</a>
					
				   
				</div>
			</div>
			</div><br><br>
			<div class="contact-form-action">
				<form method="post">
					<div class="row">
						<div class="col-4">
							<div class="form-group">
								
								<input class="form-control" type="text" name="first_name" placeholder="{{__('register.first_name')}}">
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								
								<input class="form-control" type="text" name="middle_name" placeholder="{{__('register.midlde_name')}}">
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								
								<input class="form-control" type="text" name="last_name" placeholder="{{__('register.last_name')}}">
							</div>
						</div>

						<div class="col-12">
							<div class="form-group">
								
								<input class="form-control" type="email" name="email" placeholder="{{__('register.email')}}">
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								
								<input class="form-control" type="phone" name="phone" placeholder="{{__('register.contact_number')}}">
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<label>{{__('register.category_name')}}</label><br>
								
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								
								<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
<label for="Flower Arrangement" style="font-size: 14px;"> {{__('register.cat_1')}}</label><br>
<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
<label for="Candle Making" style="font-size: 14px;">  {{__('register.cat_3')}}</label><br>
<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
<label for="Accessories" style="font-size: 14px;"> {{__('register.cat_5')}}  </label><br>
<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
<label for="Soap Making" style="font-size: 14px;">  {{__('register.cat_7')}}   </label><br>
<input type="checkbox" id="Gardening Path" name="vehicle3" value="Boat">
<label for="Gardening Path" style="font-size: 14px;">  {{__('register.cat_9')}}  </label><br>
<input type="checkbox" id="Handicrafts " name="vehicle3" value="Boat">
<label for="Handicrafts " style="font-size: 14px;">  {{__('register.cat_11')}}    </label><br>
<input type="checkbox" id="Food-Truck" name="vehicle3" value="Boat">
<label for="Food-Truck" style="font-size: 14px;">  {{__('register.cat_13')}}  </label><br>
<input type="checkbox" id="Cooking " name="vehicle3" value="Boat">
<label for="Cooking " style="font-size: 14px;">  {{__('register.cat_15')}}    </label>

							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<input type="checkbox" id="Gifts and Arrangements" name="vehicle3" value="Boat">
<label for="Gifts and Arrangements" style="font-size: 14px;">  {{__('register.cat_2')}}  </label><br>
								<input type="checkbox" id="sewing,stitching,and Embroidery " name="sewing,stitching,and Embroidery " value="Boat">
<label for="sewing,stitching,and Embroidery " style="font-size: 14px;">  {{__('register.cat_4')}}  </label><br>
<input type="checkbox" id="Carpentry and Woodwork " name="Carpentry and Woodwork " value="Boat">
<label for="Carpentry and Woodwork " style="font-size: 14px;">  {{__('register.cat_6')}}   </label><br>
<input type="checkbox" id="Drawing and Stamping " name="Drawing and Stamping " value="Boat">
<label for="Drawing and Stamping " style="font-size: 14px;"> {{__('register.cat_8')}}  </label><br>
<input type="checkbox" id="Apparel Printing" name="Apparel Printing" value="Boat">
<label for="Apparel Printing" style="font-size: 14px;">  {{__('register.cat_10')}}  </label><br>
<input type="checkbox" id="Decoupage    " name="Decoupage    " value="Boat">
<label for="Decoupage    " style="font-size: 14px;">  {{__('register.cat_12')}}       </label><br>
<input type="checkbox" id="Handmade Items " name="Handmade Items " value="Boat">
<label for="Handmade Items " style="font-size: 14px;">  {{__('register.cat_14')}}    </label><br>
<input type="checkbox" id="Crochet and knitting" name="Crochet and knitting" value="Boat">
<label for="Crochet and knitting" style="font-size: 14px;">  {{__('register.cat_16')}} </label><br><br>

							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<input type="submit" value="Add">
								
							</div>
						</div>

						<div class="col-12">
							<button class="default-btn" type="submit">
								<a href="branch_location.html"> Save & Continue</a>
							</button>
						</div>

						
					</div>
				</form>
			</div>
		</div>
	</div>
	@endsection
