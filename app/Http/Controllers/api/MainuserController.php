<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Mainuser;
use Illuminate\Support\Facades\Validator;

 
class MainuserController extends Controller
{
    //

    public function register (Request $request) {

        $validation = Validator::make($request->all(),[
            'name'=> 'required',
            'email'=> 'required',
            'mobile'=> 'required',
            'password'=> 'required',
            'c_password'=> 'required',

        ]) ;
        if ($validation->fails()) {
            return response()->json([
                'status'=>false,
                $validation->errors()],202);
        }

        $data = $request->all();
        $data['password'] = bcrypt($data['password']);

        $user = Mainuser::create($data);

        $resArr = [];
        $resArr['status'] = true;
        $resArr['user'] = $user;
        $resArr['token'] = $user->createToken('efa-application')->accessToken;
        
        return response()->json($resArr, 200,);

    
    }


    public function login(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);
        if ($validator->fails())
        {
            return response(['errors'=>$validator->errors()->all()], 200);
        }
        $user = Mainuser::where('email', $request->email)->first();


        if($user) {
           
            $resArr = [];
            $resArr['status'] = true;
            $resArr['user'] = $user;
            $resArr['token'] = $user->createToken('efa-application')->accessToken;
       
            
            return response()->json($resArr, 200,);
    
        } else {
            return response()->json([
                'status' => false,
                'error' => 'Unauthorised access'.Auth::guard('guardName')], 203);
        }
    }
}
