<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller
{
    public function Index(){
        return view("admin.login");
    }
    public function Login(Request $request){
        // dd($request->all());
        $check = $request->all();
        if(Auth::guard("admin")->attempt(['email' => $check['email'], 'password'=> $check['password']])){
            return redirect()->route('admin.dashboard')->with('error', 'Admin login Successfully');
        }else{
            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);        }
    }
    public function Dashboard(){
        return view("admin.index");
    }
}
