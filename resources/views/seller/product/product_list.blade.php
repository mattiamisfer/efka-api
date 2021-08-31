@extends('layouts.front')

@section('contents')


<div class="content ">
    <!-- START JUMBOTRON -->
    <div class="jumbotron" data-pages="parallax">
      <div class=" container-fluid container-fixed-lg">
        <div class="inner">
          <!-- START BREADCRUMB -->
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">{{__('common.product')}}</a></li>
            <li class="breadcrumb-item active">{{__('common.list')}}</li>
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
        <!-- START card -->
        <div class="card card-transparent">
          <div class="card-header ">
            {{-- <div class="card-title">Table with Dynamic Rows
            </div> --}}
            <div class="pull-right">
              <div class="col-xs-12">
           
                <a id="show-modal" href="{{route('product.product.create')}}" class="btn btn-primary btn-cons"><i class="fa fa-plus"></i> 
                  {{__('common.add_new')}}
                </a>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="card-body">
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
            <table class="table table-hover demo-table-dynamic table-responsive-block" id="tableWithDynamicRows">
              <thead>
                <tr>
                  <th>{{__('common.name')}}</th>
                  <th>{{__('common.image')}}</th>
                  <th>{{__('common.stock')}}</th>
                  <th>{{__('common.edit')}}</th>
                  <th>{{__('common.delete')}}</th>
                </tr>
              </thead>
              <tbody>

          @foreach ($products as $product)
          <tr>
            <td class="v-align-middle">
              <p>{{$product->product_name}}...</p>
            </td>
            <td class="v-align-middle">
              <p><img class="" src="{{ asset('main_product/') }}/{{ $product->image }}" width="100" height="100"/></p>
            </td>
            <td class="v-align-middle">

                @if($product->product_quantity <= 10)
                <p style="color: red">{{$product->product_quantity}}</p> 
                @else
                <p>{{$product->product_quantity}}</p> 
                @endif

            </td>
            <td class="v-align-middle">
                 <a href="{{route('product.product.edit', $product->id)}}"><i class="fa fa-edit"></i> </a>


         
              </td>
              <td class="v-align-middle">
              <form method="post" action="{{ route('product.product.destroy', $product->id) }}">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
              <button type="submit" class="btn">
            

                <i class="fa fa-trash"></i>  
              </button>
                                 </form></td>
          </tr>   
          @endforeach
           
                
              

                
              
               
               
           
              </tbody>
            </table>
            {{ $products->links() }}
          </div>
        </div>
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
<!-- END CORE TEMPLATE JS -->
<!-- BEGIN PAGE LEVEL JS -->
<!-- END PAGE LEVEL JS -->
<!-- END CORE TEMPLATE JS -->
<!-- BEGIN PAGE LEVEL JS -->
 
{{-- <script src="{{ asset('backend/assets/js/dashboard.js')}}" type="text/javascript"></script> --}}
<!-- END PAGE LEVEL JS -->
<!-- END PAGE LEVEL JS -->
<script src="{{ asset('backend/assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('backend/assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('backend/assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js')}}" type="text/javascript"></script>
<script src="{{ asset('backend/assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('backend/assets/plugins/datatables-responsive/js/datatables.responsive.js')}}"></script>
<script type="text/javascript" src="{{ asset('backend/assets/plugins/datatables-responsive/js/lodash.min.js')}}"></script>
<script src="{{ asset('backend/assets/js/datatables.js')}}" type="text/javascript"></script>
<script src="{{ asset('backend/assets/js/scripts.js')}}" type="text/javascript"></script>

 @endsection