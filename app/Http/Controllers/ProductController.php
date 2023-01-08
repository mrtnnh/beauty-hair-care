<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CartRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Models;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;

class ProductController extends Controller
{
  public function get_newproducts_table()
  {
    $products = DB::table('products')
    ->orderBy('id','desc')->take(10)->get();

    return view('home',compact('products'));
  }

  public function showproduct($id)
  {
    $product = DB::table('products')->find($id);
    if (is_null($product)) {
      return redirect('home');
    }
    return view('product', compact('product'));
  }

  public function show_newitem()
  {
    $products = DB::table('products')
                  ->orderBy('id','desc')
                  ->get();

    return view('newitem',compact('products'));
  }

}
