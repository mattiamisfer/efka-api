<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ApproveController extends Controller
{
    //

    public function approve($id) {

        $membership = User::where('id',$id)->update(['status' => '1']);
        if($membership > 0) {
            return  back()->with('success', 'Approved SucceessFully');  
        } else {
            return back()->with('failed', 'Some error Occured'); 
        }

    }
}
