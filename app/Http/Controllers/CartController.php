<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Cart;
use App\Models\Product;
use Carbon\Carbon;

class CartController extends Controller
{
  public function cart(){

      $today = Carbon::today();
      $carts = Cart::join('products','carts.product_id','=','products.id')
      ->where('user_id',Auth::id())
      ->whereDate('carts.created_at',$today)
      -> select('products.*','carts.*')
      -> get();

      return view('cart',compact('carts'));
    }

  public function add_cart( Request $request)
  {
    if( Auth::user() ){

      $id = $request->id;
      $quantity = $request->quantity;

      $product_check = Product::where('id',$id)->first();
      $cart_exists=Cart::where('product_id',$id)->where('user_id',Auth::id())->first();

      if(!empty($cart_exists))
      {
        return response()->json([
          'status' =>$product_check->product_name."はすでにカートに追加されています"
        ]);
      }
      else
      {
        Cart::create([
          'user_id' => Auth::id(),
          'product_id' => $id,
          'quantity' => $quantity,
        ]);

        return response()->json([
          'status' => $product_check->product_name." をカートに追加しました"
        ]);
      }
    }
    elseif(Auth::guest()){
      return response()->json([
        'status' =>"商品をカートに追加するにはログインまたは会員登録してください"
      ]);
    }
  }
}
