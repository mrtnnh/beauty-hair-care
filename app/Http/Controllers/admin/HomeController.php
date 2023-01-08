<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// use App\Http\Models;
// use App\Http\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }

    public function showsearch()
    {
      return view('admin.search');
    }


    public function showusers_table()
    {
      return view('admin.users_table');
    }

    public function show_newitem()
    {
      return view('admin.newitem');
    }

    public function showmypage(){
      return view('admin.mypage');
      
    }


}
