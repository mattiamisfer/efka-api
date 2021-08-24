<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class ProductControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $locale = App::currentLocale();

        App::setLocale($locale);



        // App::setLocale($locale);
            $product = Product::translatedIn($locale);
                 if (Auth::user()->role =='vendor') {

                    $product->where('id',Auth::user()->id);

            }
          $products =  $product->paginate(10);
         

       

            //return Auth::user()->role;
        return view('backend.product.product_list',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $locale = App::currentLocale();

        App::setLocale($locale);

        // App::setLocale($locale);
            $categories = Category::translatedIn($locale);
        return view('backend.product.product_add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)


    {
        //
     //   protected $fillable = [ 'product_model','product_sku','product_ispn','product_quantity',
     //'product_min_order','product_price','product_weight_value','product_weight_type','product_status','date_available','status','category','manufacture','main_image'];


     try {
        $product = new Product();
        $product->product_model = $request->product_model; 
        $product->product_sku = $request->product_sku; 
        $product->product_ispn = $request->product_ispn; 
        $product->product_quantity = $request->product_quantity; 
        $product->product_min_order = $request->product_min_order; 
        $product->product_price = $request->product_price; 
        $product->product_weight_value = $request->product_weight_value; 
        $product->product_weight_type = $request->product_weight_type; 
        $product->product_status = $request->product_status; 
        $product->product_date = $request->date_available; 
   
        $product->category_id = $request->category_id; 

        // foreach($_POST as $key=>$value)
        // {
        //   echo  "'$key'";
        //   echo ",";
        // }


        if($request->hasFile('main_image')) {
      
            $file = $request->file('main_image');
          
            // $img =  ImageManagerStatic::make($request->file('contract'));
            // $contract = Str::random().'_contract_pic.pdf';
            // Storage::disk('contract')->put($image,$img);
            $bank_path = time() . '.' . $file->getClientOriginalName();
            $destinationPath = public_path() . '/main_product/';
            $file->move($destinationPath, $bank_path);
            
     
    }  
    $product->image =$destinationPath;

   // return $destinationPath;
        foreach (['en', 'ar'] as $locale) {
            $product->translateOrNew($locale)->product_name = $request->{$locale}['product_name'];
            $product->translateOrNew($locale)->product_description = $request->{$locale}['product_description'];
            $product->translateOrNew($locale)->product_meta_tag_title = $request->{$locale}['product_meta_tag_title'];
            $product->translateOrNew($locale)->product_meta_tag_description = $request->{$locale}['product_meta_tag_description'];
            $product->translateOrNew($locale)->product_meta_tag_keyword = $request->{$locale}['product_meta_tag_keyword'];
          //  $category->translateOrNew($locale)->category_id =  '100';
        }


        $product->save();
        return  back()->with('success', 'SucceessFully Added...');  
    } catch(\Exception $e) {
        return back()->with('failed', 'Some error Occured'.$e->getMessage());  
    }
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $locale = App::currentLocale();

        App::setLocale($locale);

        // App::setLocale($locale);
            $categories = Category::translatedIn($locale);
        $products = Product::find($id);
        $attribute  =  $products->getTranslationsArray();
     
          
            return view('backend.product.product_edit',compact('products','attribute','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
