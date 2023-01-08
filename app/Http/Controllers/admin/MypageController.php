<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class MypageController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth:admin');
  }

  public function showmypage()
  {
    return view('admin.mypage');
  }



  }
