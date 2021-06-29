<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
Use Exception;
use Throwable;
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

        try  {
            $locale = App::currentLocale();
 

            App::setLocale($locale);
         
             //   //  return app()->getLocale();
             $results = [];
              $category = Category::translatedIn($locale)->get();
         
              foreach($category as $k => $categories) {
                  $results[]
         =  [
                          
                      'id' => $categories->id,
                      'name' => $categories->name,
                    
                  ]; 
              }
         
              $data = [
                  'status' => true,
                  'data' => $results
              ];
            
              return response()->json($data,200);
        }   catch(Exception $e) {
            return response()->json($e,500);
          }

  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
