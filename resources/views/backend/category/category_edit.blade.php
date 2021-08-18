@extends('layouts.front')

@section('contents')


<div class="content ">
    <!-- START JUMBOTRON -->
    <div class="jumbotron" data-pages="parallax">
      <div class=" container-fluid container-fixed-lg">
        <div class="inner">
          <!-- START BREADCRUMB -->
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Category</a></li>
            <li class="breadcrumb-item active">Edit</li>
          </ol>
          <!-- END BREADCRUMB -->
          <div class="row">
            <div class="col-xl-7 col-lg-6 ">
              <!-- START card -->
              <div class="full-height">
                <div class="text-center card-body">
                  <img class="image-responsive-height demo-mw-600" src="assets/img/demo/tab.png" alt="">
                </div>
              </div>
              <!-- END card -->
            </div>
    
          </div>
        </div>
      </div>
    </div>
    <!-- END JUMBOTRON -->
    <!-- START CONTAINER FLUID -->
    <div class=" container-fluid container-fixed-lg">
      <div class="row">

        <div class="col-lg-12">
            <form action="{{route('category.store')}}" role="form" id="demo-upload" method="POST" enctype="multipart/form-data" >
            
          
             
            	@csrf
          
          <div class="card card-borderless">
            <ul class="nav nav-tabs nav-tabs-simple" role="tablist" data-init-reponsive-tabs="dropdownfx">
              <li class="nav-item">
                <a class="active" data-toggle="tab" role="tab" data-target="#tab2hellowWorld" href="#">English</a>
              </li>
              <li class="nav-item">
                <a href="#" data-toggle="tab" role="tab" data-target="#tab2FollowUs">Arabic</a>
              </li>
           
             
             
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab2hellowWorld">
                <div class="row column-seperation">
                    <div class="col-lg-12">

                        <div class="form-group form-group-default required">
                          <label>Image</label>
                               <input type="file" class="form-control" name="image" id="image" >
                             <input type="hidden" name="current_img" value="{{$categories->image}}">
                             
                        </div>
                        <div class="form-group form-group-default required ">
                        <label>Name</label>
                        <input type="text" value="{{$attribute['en']['name']}}" class="form-control" name="en[name]" required>
                      </div>

                      <button class="btn btn-success" type="submit">Submit</button>
                      </div>
               
                </div>
              </div>
              <div class="tab-pane " id="tab2FollowUs">
                
                <div class="row column-seperation">
                    <div class="col-lg-12">
                        <div class="form-group form-group-default required ">
                        <label>Name</label>
                        <input type="text" value="{{$attribute['ar']['name']}}" class="form-control" name="ar[name]" required>
                      </div>
                      </div>
               
                </div>
                 
              </div>



              <div class="tab-pane " id="tab2FLinks">
                <div class="row column-seperation">
                  
                     
                 
                   <div class="form-group">
                    
                    <select class="form-control" data-init-plugin="select2">
                      
                      <option value="">Kilogram</option>
                        <option value="CA">gram</option>
                        <option value="NV">Pound</option>
                        <option value="NV">Once</option>
                     
                    
                    </select>
                   </div>
                  
                    


           


                </div>

                  <div class="row">
                 
              </div>

























              
              <div class="tab-pane" id="tab2Inspire">
                <div class="row">
                  <div class="col-lg-12">
                    <h3>Follow us &amp; get updated!</h3>
                    <p>Instantly connect to what's most important to you. Follow your friends, experts, favorite celebrities, and breaking news.</p>
                    <br>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
        </div>

      
      </div>
      <!-- START card -->
      
     
      <!-- END card -->
    </div>
    <!-- END CONTAINER FLUID -->
  </div>
@endsection

@section('scripts')
 
 




    <script src="{{ asset('backend/assets/plugins/pace/pace.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/jquery/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/modernizr.custom.js')}}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/popper/umd/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/jquery/jquery-easy.js')}}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/jquery-unveil/jquery.unveil.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/jquery-ios-list/jquery.ioslist.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/jquery-actual/jquery.actual.min.js')}}"></script>
    <script src="{{ asset('backend/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('backend/assets/plugins/select2/js/select2.full.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('backend/assets/plugins/classie/classie.js')}}"></script>
    <script src="{{ asset('backend/assets/plugins/switchery/js/switchery.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('backend/assets/plugins/jquery-autonumeric/autoNumeric.js')}}"></script>
    <script type="text/javascript" src="{{ asset('backend/assets/plugins/dropzone/dropzone.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('backend/assets/plugins/bootstrap-tag/bootstrap-tagsinput.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('backend/assets/plugins/jquery-inputmask/jquery.inputmask.min.js')}}"></script>
    <script src="{{ asset('backend/assets/plugins/bootstrap-form-wizard/js/jquery.bootstrap.wizard.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/summernote/js/summernote.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/moment/moment.min.js')}}"></script>
    <script src="{{ asset('backend/assets/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{ asset('backend/assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js')}}"></script>
    <script src="{{ asset('backend/assets/plugins/bootstrap-typehead/typeahead.bundle.min.js')}}"></script>
    <script src="{{ asset('backend/assets/plugins/bootstrap-typehead/typeahead.jquery.min.js')}}"></script>
    <script src="{{ asset('backend/assets/plugins/handlebars/handlebars-v4.0.5.js')}}"></script>
 
 
    <script src="{{ asset('backend/pages/js/pages.js')}}"></script>
 
    <script src="{{ asset('backend/assets/js/scripts.js')}}" type="text/javascript"></script>
  
    <script src="{{ asset('backend/assets/js/form_elements.js')}}" type="text/javascript"></script>

     <script src="{{ asset('backend/assets/js/scripts.js')}}" type="text/javascript"></script>
    
@endsection