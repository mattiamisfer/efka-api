<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\App;

class CategoryController extends Controller
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
            $categories = Category::translatedIn($locale)->get();
         

       

       return  view('backend.category.category_list',compact('categories'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
  
       return view('backend.category.category_add');
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

        try {
            $category = new Category();
   
            if($request->hasFile('image')) {
      
             $file = $request->file('image');
           
             // $img =  ImageManagerStatic::make($request->file('contract'));
             // $contract = Str::random().'_contract_pic.pdf';
             // Storage::disk('contract')->put($image,$img);
             $bank_path = time() . '.' . $file->getClientOriginalName();
             $destinationPath = public_path() . '/category_image/';
             $file->move($destinationPath, $bank_path);
             
      
     }  
             $category->image = $file;
            foreach (['en', 'ar'] as $locale) {
             $category->translateOrNew($locale)->name = $request->{$locale}['name'];
           //  $category->translateOrNew($locale)->category_id =  '100';
         }
     
        
         return  $category->save();
     
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

           $categories = Category::find($id);
   $attribute  =  $categories->getTranslationsArray();

     
       return view('backend.category.category_edit',compact('categories','attribute'));
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

        try {
            $categories = Category::findOrFail($id);
            $categories->deleteTranslations(['ar', 'en']);
            $categories->delete();
            
              
     
            return  back()->with('success', 'SucceessFully Deleted...');  
            } catch(\Exception $e) {
                return back()->with('failed', 'Some error Occured');  
            }
    }
}
