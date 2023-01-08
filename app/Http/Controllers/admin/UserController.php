<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Models;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth:admin');
  }

//管理者画面でユーザ一覧表示
  public function getusers_table(){
    $users = DB::table('users')
            ->join('addresses','users.id','=','addresses.id')
            ->select('users.*','addresses.*')
            ->get();
    return view('admin.users_table', compact('users'));
  }


}
