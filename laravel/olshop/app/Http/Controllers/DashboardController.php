<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //properti baru dengan nama index
    public function index(){
        return view('admin.dashboard');
    }
    public function index_user(){
        return view('user.dashboard');
    }
    public function logout(){
        $this->middleware('guest')->except('logout');
        return view('home');
    }
}
