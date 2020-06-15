<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLoginForm(){
        return view('admin.pages.login');
    }

    public function handleLogin(LoginRequest $request){
        $usrname = $request->usrname;
        $password = $request->pass;

        session()->put('usrname',$usrname);

        if (Auth::attempt(['ad_usrname' => $usrname, 'password' => $password])) {
            return redirect()->route('ad.index');
        }
        else{
            return redirect()->back()->with('message','User name or password is not correct!');
        }
    }

    public function handleLogout(){
        Auth::logout();
        session()->forget('usrname');
        return redirect()->route('ad.login');
    }
}
