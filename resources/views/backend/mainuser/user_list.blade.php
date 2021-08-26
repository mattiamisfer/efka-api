@extends('layouts.front')

@section('contents')


<div class="content ">
    <!-- START JUMBOTRON -->
    <div class="jumbotron" data-pages="parallax">
      <div class=" container-fluid container-fixed-lg">
        <div class="inner">
          <!-- START BREADCRUMB -->
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">User</a></li>
            <li class="breadcrumb-item active">Details</li>
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
  
        <div class="card card-default">
          @if (Session::has('success'))
     
          <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
          </div>
          @endif
          @if (Session::has('failure'))
          <div class="alert alert-danger" role="alert">
            {{ Session::get('failure') }}
          </div>
       @endif
            <div class="card-header ">
               
            </div>
            <div class="card-body">
              <h5>
                   User Details
                  </h5>
              <div class="row">
                  <div class="col-lg-3">
                      {{$users->first_name}}
                  </div>

                  <div class="col-lg-3">
                    {{$users->middle_name}}
                </div>
                <div class="col-lg-3">
                    {{$users->last_name}}
                </div>
                <div class="col-lg-3">
                    {{$users->email}}
                </div>
              </div>

              <div class="row">
                <div class="col-lg-3">
                    {{$users->phone}}
                </div>

                <div class="col-lg-9">

                    <ul>
                    @foreach ($users->category as $item)
                    <li>  {{$item->name}}</li>
                  
                    @endforeach
                    </ul>
                </div>
              </div>

              <div class="row">
                  <div class="col-lg-3">
                      <a href="{{ url('/') }}/muncipal/{{$users->document->muncipal}}">Freelances Certificate Copy

                      </a>
                  </div>
                  <div class="col-lg-3">
                    <a href="{{ url('/') }}/commercial/{{$users->document->commercial}}">Saudi National ID Copy



                    </a>
                </div>
              </div>
              <div class="row">
                <h4>Branch Details
                    @foreach ($users->branch as $item)
                    <div class="col-lg-12">
                        {{$item->branch}}
                    </div> 
                    @endforeach


                   
                   
                
              </div>

              <form   method="POST" action="{{ route('status.update',$users->id)}}"> <div class="row">
                @csrf
               
                <div class="col-lg-8">
                  <textarea name="" id="" class="form-control" cols="30" rows="10" placeholder="Enter Message"></textarea>
                  
                </div>

                <div class="col-lg-4">
                  <button type="submit" class="btn btn-success">Approve User</button>
                </div>
            
              </div>  </form>
            </div>
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