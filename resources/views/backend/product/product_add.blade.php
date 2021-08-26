@extends('layouts.front')

@section('contents')


<div class="content ">
    <!-- START JUMBOTRON -->
    <div class="jumbotron" data-pages="parallax">
      <div class=" container-fluid container-fixed-lg">
        <div class="inner">
          <!-- START BREADCRUMB -->
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Products</a></li>
            <li class="breadcrumb-item active">Add</li>
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
            <form class="" role="form"  action="{{route('product.store')}}" method="POST" enctype="multipart/form-data" >
              @csrf
          <div class="card card-borderless">
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
            <ul class="nav nav-tabs nav-tabs-simple" role="tablist" data-init-reponsive-tabs="dropdownfx">
              <li class="nav-item">
                <a class="active" data-toggle="tab" role="tab" data-target="#tab2hellowWorld" href="#">General</a>
              </li>
              <li class="nav-item">
                <a href="#" data-toggle="tab" role="tab" data-target="#tab2FollowUs">Data</a>
              </li>
              <li class="nav-item">
                <a href="#" data-toggle="tab" role="tab" data-target="#tab2FLinks">Links</a>
              </li>
              {{-- <li class="nav-item">
                <a href="#" data-toggle="tab" role="tab" data-target="#tab2FollowUs">Option</a>
              </li> --}}
             
              {{-- <li class="nav-item">
                <a href="#" data-toggle="tab" role="tab" data-target="#tab2FollowUs">Discount</a>
              </li> --}}

              <li class="nav-item">
                <a href="#" data-toggle="tab" role="tab" data-target="#tab2Image">Image</a>
              </li>
             
             
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab2hellowWorld">
                <div class="row column-seperation">
                    <div class="col-lg-12">
                        <div class="card card-borderless">
                          <ul class="nav nav-tabs nav-tabs-simple" role="tablist" data-init-reponsive-tabs="dropdownfx">
                            <li class="nav-item">
                              <a class="active" data-toggle="tab" role="tab" data-target="#tab2english" href="#">English</a>
                            </li>
                            <li class="nav-item">
                              <a href="#" data-toggle="tab" role="tab" data-target="#tab2arabic">Arabic</a>
                            </li>
                         
                          </ul>
                          <div class="tab-content">
                            <div class="tab-pane active" id="tab2english">
                                <div class="row column-seperation">
                                    <div class="form-group form-group-default required ">
                                        <label>{{  __('product.product_name')}}</label>
                                        <input type="text" class="form-control" name="en[product_name]" required>
                                      </div>
    
    
                                      <div class="form-group form-group-default required ">
                                        <label>{{  __('product.description')}}</label>
                                        <textarea class="form-control" name="en[product_description]" > </textarea>
                                       </div>
    
    
                                       <div class="form-group form-group-default required ">
                                        <label>{{  __('product.meta_tag_title')}}</label>
                                        <input type="text" class="form-control" name="en[product_meta_tag_title]" required>
                                      </div>
                                      <div class="form-group form-group-default required ">
                                        <label>{{  __('product.meta_tag_descriptiion')}}</label>
                                        <textarea class="form-control" name="en[product_meta_tag_description]" > </textarea>
                                       </div>
                                       <div class="form-group form-group-default required ">
                                        <label>{{  __('product.meta_tag_keyword')}}</label>
                                        <input type="text" class="form-control" name="en[product_meta_tag_keyword]" required>
                                      </div>
                                
                                  </div>
                                  <button class="btn btn-success" type="submit">Submit</button>
                            </div>
                            <div class="tab-pane " id="tab2arabic">
                              <div class="row column-seperation">
                                <div class="form-group form-group-default "  >
                                    <label dir="rtl">اسم المنتج</label>
                                    <input type="text" class="form-control" name="ar[product_name]" required>
                                  </div>


                                  <div class="form-group form-group-default ">
                                    <label dir="rtl"> الوصف</label>
                                    <textarea class="form-control" name="ar[product_description]" > </textarea>
                                   </div>


                                   <div class="form-group form-group-default ">
                                    <label dir="rtl">  عنوان صفحة الويب</label>
                                    <input type="text" class="form-control" name="ar[product_meta_tag_title]" required>
                                  </div>
                                  <div class="form-group form-group-default ">
                                    <label dir="rtl"> شرح صفحة الويب</label>
                                    <textarea class="form-control" name="ar[product_meta_tag_description]" > </textarea>
                                   </div>
                                   <div class="form-group form-group-default ">
                                    <label dir="rtl">الكلمات المفتاحية</label>
                                    <input type="text" class="form-control" name="ar[product_meta_tag_keyword]" required>
                                  </div>
                            
                              </div>
                            </div>
 
                          </div>
                        </div>
                      </div>
               
                </div>
              </div>
              <div class="tab-pane " id="tab2FollowUs">
                <div class="row column-seperation">
                    <div class="form-group form-group-default required ">
                        <label>{{  __('product.product_model')}}</label>
                        <input type="text" class="form-control" name="product_model" >
                      </div>
                      <div class="form-group form-group-default required ">
                        <label>{{  __('product.sku')}}</label>
                        <input type="text" class="form-control" name="product_sku" >
                      </div>
                      <div class="form-group form-group-default required ">
                        <label>{{  __('product.ispn')}}</label>
                        <input type="text" class="form-control" name="product_ispn" >
                      </div>
                      <div class="form-group form-group-default required ">
                        <label>{{  __('product.quantity')}}</label>
                        <input type="text" class="form-control" name="product_quantity" >
                      </div>
                      <div class="form-group form-group-default required ">
                        <label>{{  __('product.min_order')}} </label>
                        <input type="text" class="form-control" name="product_min_order" >
                      </div>
                      <div class="form-group form-group-default required ">
                        <label>{{  __('product.price')}}</label>
                        <input type="text" class="form-control" name="prodcut_price" >
                      </div>


                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group form-group-default required ">
                            <label>{{  __('product.weight')}}</label>
                            <input type="text" class="form-control" name="product_weight_value" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <select class="form-control" data-init-plugin="select2" name="product_weight_type">
                            <option value="">{{  __('product.kilogram')}}</option>
                              <option value="CA">gram</option>
                              <option value="NV">Pound</option>
                              <option value="NV">Once</option>
                           
                          
                          </select>
                        </div>
                      </div>


                </div>

                  <div class="row">
                       <div class="col-lg-4">
                       
                          <select class="form-control" data-init-plugin="select2" name="product_status">
                            <option value="">{{  __('product.out_of_stock')}}</option>
                              <option value="CA">In Stock</option>
                              <option value="NV">Out Of Stock</option>
                           
                          
                          </select>
                        
                      </div>

                      <div class="col-lg-4">
                        <div class="input-group p-l-0">
                          <input type="text" class="form-control"  id="datepicker-component" name="date_available">
                          <div class="input-group-append ">
                            <span class="input-group-text"><i class="fa fa-calendar" placeholder ="Available From"></i></span>
                          </div>
                        </div>

                        <div class="col-lg-4"></div>
                    </div>

                    <div class="col-lg-4">
                         <label>{{  __('product.status')}}</label>
                        <select class="form-control" data-init-plugin="select2" name="status">
                          <option value="">Enable</option>
                            <option value="CA">Disable</option>
                          
                        
                        </select>                 
                    </div>
                   

 


                     
                
                  </div>
              </div>



              <div class="tab-pane " id="tab2FLinks">
                <div class="row column-seperation">
                  
                     
                 
                   <div class="form-group">
                    
                    <select class="form-control" data-init-plugin="select2" name="category_id" style="width: 250px">
                      
                      <option value="">{{  __('product.select_category')}}</option>

                      @foreach ($categories as $category )
                      <option value="{{$category->id }}">{{$category->name }}</option>
                      @endforeach
                       
                       
                     
                    
                    </select>
                   </div>
                  
                  


           


                </div>

              </div>









              <div class="tab-pane " id="tab2Image">
                <div class="column-seperation">
                  
               
                <div class="row ">
                  
                     
                 
                  <div class="image-upload">
                    <label >
                      <img id="previewImg0" src="https://icon-library.net/images/upload-photo-icon/upload-photo-icon-21.jpg" style="width: 100px; height: 100px;" />
                    </label>
              
                    <input   type="file" name="main_image" class="fileupload"   id="0" />
                  </div>

           


                </div>

 
                <div class="row field_wrapper" >
                
                    <div class="col-lg-4">
                      {{-- <div class="image-upload">
                        <label >
                          <img class="previewImg" src="https://icon-library.net/images/upload-photo-icon/upload-photo-icon-21.jpg" style="width: 100px; height: 100px;" />
                        </label>
                   
                        <input   type="file" class="fileupload"  data-id="res"  name="main_image_gallery[]"    />
                      </div> --}}
    
                    </div>
                    <div class="col-lg-4">
                      {{-- <input type="text" class="form-control" placeholder="Sort Order"> --}}
                    </div>
                    <div class="col-lg-4">
                      {{-- <a href="javascript:void(0);" class="add_button" title="Add field"><img src="{{ asset('backend/icons/add-icon.png')}}"></a> --}}
                    </div>
                  

              </div>

              <div class="row " >
                
                <div class="col-lg-4">
                  {{-- <div class="image-upload">
                    <label >
                      <img class="previewImg" src="https://icon-library.net/images/upload-photo-icon/upload-photo-icon-21.jpg" style="width: 100px; height: 100px;" />
                    </label>
               
                    <input   type="file" class="fileupload"  data-id="res"  name="main_image_gallery[]"    />
                  </div> --}}

                </div>
                <div class="col-lg-4">
                  {{-- <input type="text" class="form-control" placeholder="Sort Order"> --}}
                </div>
                <div class="col-lg-4">
                  <a href="javascript:void(0);" class="add_button" title="Add field"><img src="{{ asset('backend/icons/add-icon.png')}}"></a>
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
 <script src="https://www.jqueryscript.net/demo/Image-Preview-Before-Uploading-jQuery-Image-Reader/jquery.imagereader-1.1.0.js"></script>
 <script>
//   function previewFile(input){
//       var file = $("input[type=file].fileupload").get(0).files[0];
//       var ID = $(this).attr("data-id");
// alert(ID);
//       if(file){
//         var reader = new FileReader();

//         reader.onload = function(){
//             $(".display_"+ID).attr("src", reader.result);
//         }

//         reader.readAsDataURL(file);
//       }
//   }

 
// ..................................................................................................................................................ś.............................................ś..........

    $(document).ready(()=>{
      $(document).on('change', '.fileupload', function() {

     // $('.fileupload').change(function(){

        const ID = $(this).attr("id");
    alert(ID);
        const file = this.files[0];
        console.log(file);
        if (file){
          let reader = new FileReader();
          reader.onload = function(event){
            console.log(event.target.result);
            $('#previewImg'+ID).attr('src', event.target.result);
          }
          reader.readAsDataURL(file);
        }
      });
    });
</script>

<script type="text/javascript">
  $(document).ready(function(){
      var maxField = 10; //Input fields increment limitation
      var addButton = $('.add_button'); //Add button selector
      var wrapper = $('.field_wrapper'); //Input field wrapper

      var x = 1; //Initial field counter is 1
      
      //Once add button is clicked
      $(addButton).click(function(){
          //Check maximum number of input fields
          if(x < maxField){ 
            var fieldHTML =  
          '                    <div class="col-lg-4">\n' +
          '                      <div class="image-upload">\n' +
          '                        <label  >\n' +
          '                          <img id="previewImg'  +x  + '" src="https://icon-library.net/images/upload-photo-icon/upload-photo-icon-21.jpg" style="width: 100px; height: 100px;" />\n' +
          '                        </label>\n' +
          '                  \n' +
          '                        <input   type="file" class="fileupload" name="main_image_gallery[]"  id = "'+x+'"   />\n' +
          '                      </div>\n' +
          '    \n' +
          '                    </div>\n' +
          '                    <div class="col-lg-4">\n' +
          '                      <input type="text" class="form-control" name="sort_order[]" placeholder="Sort Order">\n' +
          '                    </div>\n' +
          '                    <div class="col-lg-4">\n' +
          '                      <a href="javascript:void(0);" class="remove_button" title="Add field"><img src="{{ asset('backend/icons/remove-icon.png')}}"></a>\n' +
          '                    </div>\n' ; //New input field html
           
              x++; //Increment field counter
              $(wrapper).append(fieldHTML); //Add field html
          }
      });
      
      //Once remove button is clicked
      $(wrapper).on('click', '.remove_button', function(e){
          e.preventDefault();
          $(this).parent('div').remove(); //Remove field html
          x--; //Decrement field counter
      });
  });
  </script>
@endsection