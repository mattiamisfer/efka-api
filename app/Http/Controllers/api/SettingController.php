<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
Use Exception;
use Throwable;
class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

      
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
        try  {
            $locale = App::currentLocale();
 

            App::setLocale($locale);
         
             //   //  return app()->getLocale();
             $results = [];
               $settings = Setting::translatedIn($locale)->get();
         
              foreach($settings as $k => $settting) {
                  $results[]
         =  [
                          
                      'id' => $settting->id,
                      'content' => $settting->name,
                      
                    
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        try  {
            $locale = App::currentLocale();
 

            App::setLocale($locale);
         
             //   //  return app()->getLocale();
             $results = [];
              $settings = Setting::translatedIn($locale)->get();
         
              foreach($settings as $k => $settting) {
                  $results[]
         =  [
                          
                      'id' => $settting->id,
                      'content' => $settting->name,
                      
                    
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
