@vite(['public/css/newitem.css'])
@extends('layouts.admin')
@section('content')
<div class="container">
  <div class="h1">NEW ITEM</div>

  <div class="newitem_table">
    @foreach($products as $product)
    <div class="newitem_tr">
      <div class="newitem_img">
        <a href="newitem/product/{{ $product->id }}"><img  src="/{{$product->image}}"></a>
      </div>
      <div class="newitem_text">
        <div ><a href="newitem/product/{{ $product->id }}">{{ $product->product_name }}</a></div>
        <div ><a href="newitem/product/{{ $product->id }}">￥{{ $product->price }}</a></div>
      </div>
    </div>
    @endforeach
  </div>

</div>
@endsection
