<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Models;
use App\Models\User;
use App\Models\Address;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

class UserController extends Controller
{

  public function show_myinfo()
  {
    $myinfo = DB::table('users')
            ->join('addresses', 'users.id', '=','addresses.id')
            ->where('users.id', Auth::id())
            ->select('users.*','addresses.*')
            ->get();
    return view('myinfo',compact('myinfo'));
  }


  public function validator(UserRequest $request)
  {
    $request->all();
    try{

      $user = User::find(Auth::id());
      $user->fill([
        'name' => $request['name'],
        'email' => $request['email'],
        ])->save();

        $address = Address::find(Auth::id());
        if(empty($request['building'])){
          $request['building']=='';
        }
        $address ->fill([
          'tell' => $request['tell'],
          'postcode' => $request['postcode'],
          'prefecture' => $request['prefecture'],
          'address_city' => $request['address_city'],
          'address_street' => $request['address_street'],
          'building' =>$request['building'],
          ])->save();

          return view('send',['successMessage' => '変更が完了しました']);
        } catch (Exception $e) {

          Session::flash('error_message', 'Server error.');
        }

      }
    }
