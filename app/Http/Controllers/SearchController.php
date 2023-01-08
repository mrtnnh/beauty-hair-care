<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models;
use App\Models\Product;


class SearchController extends Controller
{

  public function showsearch()
  {
    return view('search');
  }

  public function search(Request $request)
  {
    $request->validate([
      'search' => ['nullable','string','max:50'],
    ]);

    $search = $request->input('search');

    if(empty($search))
    {
      $products=Product::all();

    }else {
      if(isset($search)){
         $spaceConversion = mb_convert_kana($search, 's');
         $wordArraySearched = preg_split('/[\s,]+/', $spaceConversion, -1, PREG_SPLIT_NO_EMPTY);

         foreach($wordArraySearched as $value) {
            $products=Product::where('product_name', 'like', '%'.$value.'%')
                              ->orwhere('category', 'like', '%'.$value.'%')
                              ->orwhere('use_scene','like', '%'.$value.'%')
                              ->get();
         }
      }
    }

    if(!empty($request['shampoo'])){
      $products= Product::where('category','like', '%'.$request['shampoo'].'%')->get();
    }

    if(!empty($request['in_treatment'])){
      $products= Product::where('category','like', '%'.$request['in_treatment'].'%')->get();
    }

    if(!empty($request['hairMilk'])){
      $products= Product::where('category','like', '%'.$request['hairMilk'].'%')->get();
    }

    if(!empty($request['out_treatment'])){
      $products= Product::where('category','like', '%'.$request['out_treatment'].'%')->get();
    }

    if(!empty($request['hairOil'])){
      $products= Product::where('category','like', '%'.$request['hairOil'].'%')->get();
    }

    if(!empty($request['water_treatment'])){
      $products= Product::where('category','like', '%'.$request['water_treatment'].'%')->get();
    }

    if(!empty($request['etc'])){
      $products= Product::where('category','like', '%'.$request['etc'].'%')->get();
    }

    if(!empty($request['dry'])){
      $products= Product::where('use_scene','like', '%'.$request['dry'].'%')->get();
    }

    if(!empty($request['curlyhair'])){
      $products= Product::where('use_scene','like', '%'.$request['curlyhair'].'%')->get();
    }

    if(!empty($request['damage'])){
      $products= Product::where('use_scene','like', '%'.$request['damage'].'%')->get();
    }

    if(!empty($request['scalp'])){
      $products= Product::where('use_scene','like', '%'.$request['scalp'].'%')->get();
    }

    //dd($products,$search);
    return view('search_result',compact('products'));
  }
}
