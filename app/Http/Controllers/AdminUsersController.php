<?php

namespace App\Http\Controllers;

use App\adminUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){

        $this->middleware('guest:admin')->except('logout');
    }
    public function index()
    {
        adminUsers::all();
        return view('admin.login');
    }

public function logout(){
auth::guard('admin')->logout();
return view('admin.login');
session()->flash('msg','admin logout successfully !');

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
        //validate
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
          
        ]);
        ///login(admin)
     $fields=$request->only('email','password');
if (! Auth::guard('admin')->attempt($fields)) {
    return back()->withErrors([
        'msg' => 'Wron data Please Try Agin!'
    ]);
};
    
        //redirect
        return redirect('/admin');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\adminUsers  $adminUsers
     * @return \Illuminate\Http\Response
     */
    public function show(adminUsers $adminUsers)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\adminUsers  $adminUsers
     * @return \Illuminate\Http\Response
     */
    public function edit(adminUsers $adminUsers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\adminUsers  $adminUsers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, adminUsers $adminUsers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\adminUsers  $adminUsers
     * @return \Illuminate\Http\Response
     */
    public function destroy(adminUsers $adminUsers)
    {
        //
    }
}
