@extends('layouts.front')

@section('contents')


<div class="content ">
    <!-- START JUMBOTRON -->
    <div class="jumbotron" data-pages="parallax">
      <div class=" container-fluid container-fixed-lg">
        <div class="inner">
          <!-- START BREADCRUMB -->
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
            <li class="breadcrumb-item active">Tabs &amp; Accordians</li>
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
            <form class="" role="form">
          <div class="card card-borderless">
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
              <li class="nav-item">
                <a href="#" data-toggle="tab" role="tab" data-target="#tab2FollowUs">Option</a>
              </li>
             
              <li class="nav-item">
                <a href="#" data-toggle="tab" role="tab" data-target="#tab2FollowUs">Discount</a>
              </li>

              <li class="nav-item">
                <a href="#" data-toggle="tab" role="tab" data-target="#tab2FollowUs">Image</a>
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
                                        <input type="email" class="form-control" name="product_name" required>
                                      </div>
    
    
                                      <div class="form-group form-group-default required ">
                                        <label>{{  __('product.description')}}</label>
                                        <textarea class="form-control" name="description_en" > </textarea>
                                       </div>
    
    
                                       <div class="form-group form-group-default required ">
                                        <label>{{  __('product.meta_tag_title')}}</label>
                                        <input type="email" class="form-control" name="meta_tag_title_en" required>
                                      </div>
                                      <div class="form-group form-group-default required ">
                                        <label>{{  __('product.meta_tag_descriptiion')}}</label>
                                        <textarea class="form-control" name="meta_tag_descriptiion_en" > </textarea>
                                       </div>
                                       <div class="form-group form-group-default required ">
                                        <label>{{  __('product.meta_tag_keyword')}}</label>
                                        <input type="email" class="form-control" name="meta_tag_keyword_en" required>
                                      </div>
                                
                                  </div>
                            </div>
                            <div class="tab-pane " id="tab2arabic">
                                <div class="row column-seperation">
                                    <div class="form-group form-group-default required ">
                                        <label>{{  __('product.product_name')}}</label>
                                        <input type="email" class="form-control" name="product_name" required>
                                      </div>
    
    
                                      <div class="form-group form-group-default required ">
                                        <label>{{  __('product.description')}}</label>
                                        <textarea class="form-control" name="description_en" > </textarea>
                                       </div>
    
    
                                       <div class="form-group form-group-default required ">
                                        <label>{{  __('product.meta_tag_title')}}</label>
                                        <input type="email" class="form-control" name="meta_tag_title_en" required>
                                      </div>
                                      <div class="form-group form-group-default required ">
                                        <label>{{  __('product.meta_tag_descriptiion')}}</label>
                                        <textarea class="form-control" name="meta_tag_descriptiion_en" > </textarea>
                                       </div>
                                       <div class="form-group form-group-default required ">
                                        <label>{{  __('product.meta_tag_keyword')}}</label>
                                        <input type="email" class="form-control" name="meta_tag_keyword_en" required>
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
                        <label>Model</label>
                        <input type="text" class="form-control" name="model" required>
                      </div>
                      <div class="form-group form-group-default required ">
                        <label>SKU</label>
                        <input type="text" class="form-control" name="sku" required>
                      </div>
                      <div class="form-group form-group-default required ">
                        <label>ISPN</label>
                        <input type="text" class="form-control" name="ispn" required>
                      </div>
                      <div class="form-group form-group-default required ">
                        <label>Quantity</label>
                        <input type="text" class="form-control" name="quantity" required>
                      </div>
                      <div class="form-group form-group-default required ">
                        <label>Min Order </label>
                        <input type="text" class="form-control" name="min_order" required>
                      </div>
                      <div class="form-group form-group-default required ">
                        <label>Price</label>
                        <input type="text" class="form-control" name="price" required>
                      </div>


                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group form-group-default required ">
                            <label>Weight</label>
                            <input type="text" class="form-control" name="weight" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <select class="form-control" data-init-plugin="select2">
                            <option value="">Kilogram</option>
                              <option value="CA">gram</option>
                              <option value="NV">Pound</option>
                              <option value="NV">Once</option>
                           
                          
                          </select>
                        </div>
                      </div>


                </div>

                  <div class="row">
                       <div class="col-lg-4">
                       
                          <select class="form-control" data-init-plugin="select2">
                            <option value="">Out of stock Status</option>
                              <option value="CA">In Stock</option>
                              <option value="NV">Out Of Stock</option>
                           
                          
                          </select>
                        
                      </div>

                      <div class="col-lg-4">
                        <div class="input-group p-l-0">
                          <input type="text" class="form-control" id="datepicker-component" name="date_available">
                          <div class="input-group-append ">
                            <span class="input-group-text"><i class="fa fa-calendar" placeholder ="Available From"></i></span>
                          </div>
                        </div>

                        <div class="col-lg-4"></div>
                    </div>

                    <div class="col-lg-4">
                         <label>Status</label>
                        <select class="form-control" data-init-plugin="select2">
                          <option value="">Enable</option>
                            <option value="CA">Disable</option>
                          
                        
                        </select>                 
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