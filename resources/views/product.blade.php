@vite(['public/css/product.css'])
@extends('layouts.layouts')
@section('content')
<div class="container">
  <div class="h1">商品詳細</div>

  <form method="POST" action="{{route('add_cart',['id' => $product->id] )}}">
    @csrf
    <div class="product_wrap">
    <div class="product_main">
      <div class="product_image">
        <img src="/{{$product->image}}"></img>
      </div>

      <div class="product_name">
        <div>{{$product->brand}}</div>
        <h2>{{$product->product_name}}</h2>
        <p>￥{{$product->price}}税込</p>

        <label for="quantity">購入数: </label>

        <select id='quantity' name="quantity">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
        </select>

        <div class="btn">
          <button type="button" class="btn-primary" id="addcart">カートに入れる</button>
          <input type="hidden" name="product_id" class="product_id" value="{{ $product->id }}">
        </div>
      </div>
    </div>

    <div class="product_text">
      <div>
        <p>商品情報</p>
        <p>{{$product->description}}</p>
      </div>
    </div>
  </div>
  </form>
</div>
@endsection
