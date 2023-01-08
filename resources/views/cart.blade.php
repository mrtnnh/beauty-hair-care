@vite(['public/css/cart.css'])
@extends('layouts.layouts')
@section('content')
<div class="container">
  <div class="h1">カートの中身</div>

  @if(Auth::guest())
    <p class="cart_nothing">カートに入っている商品はありません</p>

  @else

  <div class="cart_product">

    <div class="product_main">
    @foreach($carts as $cart)
    <div class="product">
    <div class="product_image">
      <img src="/{{$cart->image}}">
    </div>
    <div class="product_text">
      <p>{{$cart->product_name}}</p>
      <p>￥{{$cart->price}}税込</p>
      <p>個数：{{$cart->quantity}}</p>
    </div>
  </div>
    @endforeach
  </div>
</div>
  @endif

  <div class="btn">
    <button class="btn-primary" onclick="history.back()">戻る</button>
  </div>
</div>
@endsection
