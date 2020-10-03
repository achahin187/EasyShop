<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Session;

class loginController extends Controller
{

    public function __construct()
    {
$this->middleware('guest')->except('logout');

    }
    //////////////////////
     public function index()
    {
        return view('front.users.login');

    }
///////////////////////////////////////
    public function store(Request $request)
    {
  ///validate
  $rules=[
      'email' => 'required|email',
      'password' => 'required'
  ];
  $request->validate($rules);
  ///check if user exists
  $data=request([
      'email','password'
  ]);
  if(!auth()->attempt($data))
  {
return back()->withErrors(['masg' => 'Wrong data']);
  }
  return redirect('/user/profile');


    }
//////////////////////////////////////////////
    public function logout( )
    {
     //logout the user

auth()->logout();
Session::flush();

     ///session msg   

     session()->flash('msg','Logout Successfully!');
//redirect user
return redirect('/user/login');
      }
}
