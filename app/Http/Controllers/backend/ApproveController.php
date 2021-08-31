<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ApproveController extends Controller
{
    //

    public function approve(Request $request,$id) {

        $status = $request->status;

        $membership = User::where('id',$id)->update(['status' => $status]);
        if($membership > 0) {
            return  redirect()->to('/admin/user')->with('success', 'Approved SucceessFully');  
        } else {
            return redirect()->to('/admin/user')->with('failed', 'Some error Occured'); 
        }

    }
}
