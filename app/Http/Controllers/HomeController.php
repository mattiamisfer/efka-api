<?php

namespace App\Http\Controllers;

use App\Models\AccountDetails;
use App\Models\BranchInfo;
use App\Models\Category;
use App\Models\CrDetails;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;
use Symfony\Contracts\Service\Attribute\Required;
use Exception;
class HomeController extends Controller
{
    //

    public function terms() {
      $locale = App::currentLocale();

      App::setLocale($locale);

    //  return app()->getLocale();
     $setting = Setting::translatedIn($locale)->where('id',1)->get();
    return view('front.setting',compact('setting'));

  }

  public function privacy() {
    $locale = App::currentLocale();

    App::setLocale($locale);

  //  return app()->getLocale();
   $setting = Setting::translatedIn($locale)->where('id',2)->get();
  return view('front.setting',compact('setting'));

}
    public function index() {
           $locale = App::currentLocale();

            App::setLocale($locale);

      // app()->getLocale();
           $category = Category::translatedIn($locale)->get();
      return view('front.index',compact('category'));

    }


    public function store(Request $request) {


  try {
  //   $validated = $request->validate([

  // ]);

  $validator = Validator::make($request->all(), [
    'first_name' => 'required',
    'middle_name' => 'required',
    'last_name' => 'required',
    'email' => 'required|email|unique:users',
    'phone' => 'required',
    'password' => 'required|min:6|confirmed',
'password_confirmation' => 'required|min:6',
'checkbox' => 'required'
  ]);
  if ($validator->fails()) {
    return redirect('')
                ->withErrors($validator)
                ->withInput();
}

  $user = new User();

  $user->first_name =  $request->first_name;
  $user->middle_name =   $request->middle_name;
  $user->last_name =    $request->last_name;
  $user->email =   $request->email;
  $user->password =  bcrypt($request->password);
  $user->phone = $request->phone;
 // $user->status =0;

  $user->role = 'vendor';

  $save = $user->save();
  $user->category()->sync($request->input('category', []));
  //return redirect()->route('/basic-info',['id'=>$user->id]); //pass your dynamic id
  return redirect()->to('cr-details/'.$user->id); //pass your dynamic id




  } catch(\Exception $e) {
return $e;
  }
 
    }



    public function basic_info($id) {
     return view('front.branch_info');
    }
    public function basic_store(Request $request)  {
      try {
 
        

        if(count($request->branch) > 0) {

         foreach($request->branch as $key => $batches) {
 
        //  echo $batches['branch'];
           $data = [
             'branch' => $batches ,
             'user_id' => $request->user_id
           ];

          BranchInfo::create($data);
         }
         session()->flash('msg', 'تم التسجيل بنجاح');

          return redirect()->to('/');
     //    return redirect()->to('account-details/'.$request->user_id);
        }

      } catch(\Exception $e) {
return $e->getMessage();
      }

     }


     public function account_details($id) {
    return view('front.bank_account_details');
     }
     public function account_store(Request $request ) {
    

      try {

      //   $validated = $request->validate([
      //     'bank_ac' => 'required',
      //   'branch_code' => 'required',
      //   'account_holder' => 'required',
      //   'bank' => 'required'
      // ]);
      $input = $request->all();
   
      $validator = Validator::make(
          $input, 
          [
            'bank_ac' => 'required',
            'branch_code' => 'required',
            'account_holder' => 'required',
            'bank' => 'required|mimes:jpg,jpeg,png,pdf,doc,docx|max:2000'
          ]
          ,[
            'bank.required' => 'Copy of Bank Account is required',
            'bank.mimes' => 'Only pdf,doc,docx,jpeg,png and bmp images are allowed',
            'bank.max' => 'Sorry! Maximum allowed size for an image is 2MB',
          ]
      );
     
 

    if ($validator->fails()) {
      return redirect('account-details/'.$request->user_id)
                  ->withErrors($validator)
                  ->withInput();
  }
    
        if($request->hasFile('bank')) {
 
                $file = $request->file('bank');
              
                // $img =  ImageManagerStatic::make($request->file('contract'));
                // $contract = Str::random().'_contract_pic.pdf';
                // Storage::disk('contract')->put($image,$img);
                $bank_path = time() . '.' . $file->getClientOriginalExtension();
                $destinationPath = public_path() . '/bank/';
                $file->move($destinationPath, $bank_path);
                
         
        }  
  
        // 'user_id',
        // 'bank_ac',
        // 'branch_code',
        // 'account_holder',
        // 'bank_account_file'
  
        $bank = new AccountDetails();
        $bank->user_id = $request->user_id;
        $bank->bank_ac= $request->bank_ac;
        $bank->branch_code = $request->branch_code;
        $bank->account_holder = $request->account_holder;
        $bank->bank_account_file = $bank_path;
  
        $save = $bank->save();
        return redirect()->to('cr-details/'.$request->user_id);
      } catch(\Exception $e) {
        return $e->getMessage();
      }

 
    }

    public function cr_details($id) {
     // echo $id;
     return view('front.cr_details');
    }

    public function cr_store(Request $request) {
      try  {

        $validator = Validator::make($request->all(), [
          
      
       'commercial' => 'required|mimes:jpg,jpeg,png,pdf,doc,docx|max:2000',
       'muncipal' => 'required|mimes:jpg,jpeg,png,pdf,doc,docx|max:2000',
      
        ],[
          'commercial.required' => 'Freelances Certificate Copy is required',
          'commercial.mimes' => 'Only pdf,doc,docx,jpeg,png and bmp images are allowed',
          'commercial.max' => 'Sorry! Maximum allowed size for an image is 2MB',

          'muncipal.required' => 'Saudi National ID Copy is required',
          'muncipal.mimes' => 'Only pdf,doc,docx,jpeg,png and bmp images are allowed',
          'muncipal.max' => 'Sorry! Maximum allowed size for an image is 2MB',

         
        ]);


   if ($validator->fails()) {
     return redirect('cr-details/'.$request->user_id)
                 ->withErrors($validator)
                 ->withInput();
 }

           
        if($request->hasFile('commercial')) {
         
                $file = $request->file('commercial');
              
                // $img =  ImageManagerStatic::make($request->file('contract'));
                // $contract = Str::random().'_contract_pic.pdf';
                // Storage::disk('contract')->put($image,$img);
                $commercial = time() . '.' . $file->getClientOriginalExtension();
                $destinationPath = public_path() . '/commercial/';
                $file->move($destinationPath, $commercial);
       
        }  


        if($request->hasFile('muncipal')) {
          
                $file = $request->file('muncipal');
              
                // $img =  ImageManagerStatic::make($request->file('contract'));
                // $contract = Str::random().'_contract_pic.pdf';
                // Storage::disk('contract')->put($image,$img);
                $muncipal = time() . '.' . $file->getClientOriginalExtension();
                $destinationPath = public_path() . '/muncipal/';
                $file->move($destinationPath, $muncipal);
                
          
        }  

        // if($request->hasFile('tax')) {
    
        //         $file = $request->file('tax');
              
        //         // $img =  ImageManagerStatic::make($request->file('contract'));
        //         // $contract = Str::random().'_contract_pic.pdf';
        //         // Storage::disk('contract')->put($image,$img);
        //         $tax = time() . '.' . $file->getClientOriginalExtension();
        //         $destinationPath = public_path() . '/tax/';
        //         $file->move($destinationPath, $tax);
                
     
        // }  









        // 'cr_number',
        // 'tax',
        // 'commercial',
        // 'muncipal'

        $cr = new CrDetails();

        $cr->cr_number ='null';
        $cr->tax = 'null';
        $cr->commercial =  $commercial;
        $cr->muncipal = $muncipal;
        $cr->user_id = $request->user_id;

        $save = $cr->save();
        session()->flash('msg', 'Successfully done the Registration...');

      //  return redirect()->to('/');
        return redirect()->to('basic-info/'.$request->user_id);

      } catch(\Exception $e) {
        return $e;
      }
    }
    public function list() {
      $locale = App::currentLocale();

       App::setLocale($locale);

       $category = Category::translatedIn($locale)->get();

   return    $category;
    }











    public function add(Request $request) {
           $article_data = [];
   
          $article_data['en'] = [
            //  'title' => $request->input('en_title'),
              'name' =>  $request->en_title,
          ];
    
       
          $article_data['ar'] = [
            //  'name' => $request->input('lt_title'),
              'name' => $request->ar_title,
          ];
   

    $post =  Category::create($article_data);
     
      return   $post;
    }
}