<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
 
class LoginControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function index()
    {
        //

        return view('backend.login');
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
    public function login(Request $request)
    {
        //

        // if(($request->input('username') == 'admin@gmail.com') && ($request->input('password') == "password" )) {
        //     return redirect()->to('user');

        // } else {
        //     return back()->with('failed', 'Some error Occured');  

        // }

        $input = $request->all();
   
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

      //  Auth::attempt(['email' => $email, 'password' => $password])
   
        if(  Auth::attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (Auth::user()->role ='admin') {
                return redirect()->route('user');
               // return redirect()->intended('student.home');

            }
            
            if (Auth::user()->role ='vendor') {
                return redirect()->route('/product');
            }

        //    return redirect()->to('user');
        }else{
            return redirect()->route('/login')
                ->with('failed','Email-Address And Password Are Wrong.');
        }
    }

    public function logout(Request $request) {
    //  return  Auth::logout();
    return redirect('/')->with(Auth::logout());

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
