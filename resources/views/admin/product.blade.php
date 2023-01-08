@vite(['public/css/product.css'])
@extends('layouts.admin')
@section('content')
<div class="container">
  <div class="h1">商品詳細</div>
  <div class="product_main">

    <div class="product_image">
      <img src="/{{$product->image}}">
    </div>

    <div class="product_name">
      <div>{{$product->brand}}</div>
      <h2>{{$product->product_name}}</h2>
      <p>￥{{$product->price}}税込</p>

    </div>
  </div>

  <div class="product_text">
    <div>
      <p>商品情報</p>
      <p>{{$product->description}}</p>
    </div>
  </div>
  
</div>
@endsection
