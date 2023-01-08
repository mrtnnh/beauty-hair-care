<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:admin');
  }

  public function get_newproducts_table()
  {
    $products = DB::table('products')
    ->orderBy('id','desc')->take(10)->get();

    return view('admin.home',compact('products'));
  }

  public function show_newitem()
  {
    $products = DB::table('products')
    ->orderBy('id','desc')
    ->get();

    return view('admin.newitem',compact('products'));
  }

  public function showproduct($id)
  {

    $product = DB::table('products')->find($id);
    if (is_null($product)) {
      return redirect('admin.home');
    }
    return view('admin.product', compact('product'));
  }

  public function show_products_table()
  {
    //Product::withTrashed()->restore();
    $products = Product::all();
    return view('admin.products_table' ,compact('products'));
  }

  public function show_product_edit($id){
    $product = DB::table('products')->find($id);
    if (is_null($product)) {
      return redirect('admin.products_table');
    }
    return view('admin.product_edit', compact('product'));
  }

  public function product_edit( ProductRequest $request)
  {
    $request->all();

    $dir = 'img';
    $id = $request->id;
    $product=Product::find($id);

    $file_name = $request->file('image')->getClientOriginalName();
    $image = $request->file('image')->storeAs('public/' .$dir, $file_name);
    $path = 'storage/'.$dir.'/'.$file_name ;

    $product->fill([
      'category' => $request['category'],
      'product_name' => $request['product_name'],
      'brand' => $request['brand'],
      'price' => $request['price'],
      'stock' => $request['stock'],
      'use_scene' =>$request['use_scene'],
      'description'=> $request['description'],
      'image' =>$path,
      ])->save();

      return view('admin.edit_complete');
    }

    public function show_product_delete($id){
      Product::where('id',$id)->delete();
      $products = Product::all();
      return view('admin.products_table',compact('products'));
    }

    public function show_product_register(){
      return view('admin.product_register');
    }

    public function product_register(ProductRequest $request)
    {
      $request->all();

      $dir = 'img';
      $file_name = $request->file('image')->getClientOriginalName();
      $image = $request->file('image')->storeAs('public/' .$dir, $file_name);
      $path = 'storage/'.$dir.'/'.$file_name ;

      Product::create([
        'category' => $request['category'],
        'product_name' => $request['product_name'],
        'brand' => $request['brand'],
        'price' => $request['price'],
        'stock' => $request['stock'],
        'use_scene' =>$request['use_scene'],
        'description'=> $request['description'],
        'image' =>$path,
      ]);
      return view('admin.edit_complete',['successMessage' => '登録完了しました']);
    }
  }
