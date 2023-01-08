@vite(['public/css/search.css'])
@extends('layouts.admin')
@section('content')
<div class="container">
  <div class="border">
    <div class="h1">検索結果</div>
  </div>
  <div class="content_wrap">
    <div class="search_table">
      @foreach($products as $product)
      <div class="search_table_tr">
        <div class="search_img">
          <a  href="search_result/product/{{ $product->id }}"><img src="/{{$product->image}}"></a>
        </div>
        <div class="search_text">
          <div><a href="search_result/product/{{ $product->id }}">{{ $product->product_name }}</a></div>
          <div><a href="search_result/product/{{ $product->id }}">￥{{ $product->price }}</a></div>
      </div>
    </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
