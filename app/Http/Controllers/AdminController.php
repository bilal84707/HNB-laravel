<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class AdminController extends Controller
{
    public function login()
    {
        $usertype= auth::user()->usertype;
       if($usertype=='1')
       {
        return view('backend.dashboard');
       }
    }

    public function logout()
{
    Auth::logout();

    return redirect()->route('login');
}
}
