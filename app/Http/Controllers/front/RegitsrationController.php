<?php

namespace App\Http\Controllers\front;
use App\Http\Controllers\front\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
class RegitsrationController extends Controller
{
    public function index(){
        return view('front.users.signup');
    }
    public function store(Request $request){
//validate the user
$this->Validate($request,[
    'name' => 'required',
    'email' => 'required|email',
    'password' => 'required|confirmed'
]);
///save data
$user=User::create([
'name' => $request->name ,
'email' => $request->email,
    'password' => bcrypt($request->password)
]);

///sign in
auth()->login($user);
///redirect
return redirect('/user/profile');
    }
}
