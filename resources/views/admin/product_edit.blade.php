@vite(['public/css/product_edit.css'])
@extends('layouts.admin')
@section('content')
<div class="container">

  <div class="border">
    <div class="h1">商品編集</div>
  </div>
  <div class="prpduct_wrap">
    <form action="{{route('product_edit.store',['id'=> $product->id ])}}" method="post" enctype="multipart/form-data">
      @csrf

      @error('category')
      <p class="error">{{$message}}</p>
      @enderror
      <div class="product_input">
        <label for="category">カテゴリー</label><br>
        <select name="category">
          <option value="{{ $product->category ?? old('category') }}">{{ $product->category ?? old('category') }}</option>
          <option>シャンプー</option>
          <option>トリートメント</option>
          <option>アウトバストリートメント</option>
          <option>ヘアオイル</option>
          <option>ヘアミルク</option>
          <option>ウォータートリートメント</option>
          <option>ブラシ・その他</option>
        </select>
      </div>

      @error('brand')
      <p class="error">{{$message}}</p>
      @enderror
      <div class="product_input">
        <label for="brand">ブランド名</label><br>
        <input class="product_data" type="text" name="brand" value="{{ $product->brand ?? old('brand') }}">
      </div>

      @error('product_name')
      <p class="error">{{$message}}</p>
      @enderror
      <div class="product_input">
        <label for="product_name">商品名</label><br>
        <input class="product_data" type="text" name="product_name" value="{{ $product->product_name ?? old('product_name') }}">
      </div>

      @error('price')
      <p class="error">{{$message}}</p>
      @enderror
      <div class="product_input">
        <label for=price"">価格</label><br>
        <input class="product_data" type="text" name="price"  value="{{ $product->price ?? old('price') }}">
      </div>

      @error('stock')
      <p class="error">{{$message}}</p>
      @enderror
      <div class="product_input">
        <label for="stock">在庫数</label><br>
        <input class="product_data" type="text" name="stock"  value="{{ $product->stock ?? old('stock') }}">
      </div>

      @error('use_scene')
      <p class="error">{{$message}}</p>
      @enderror
      <div class="product_input">
        <label for="use_scene">悩み</label><br>
        <select name="use_scene">
          <option value="{{$product->use_scene ?? old('uae_scene')}}">{{$product->use_scene ?? old('uae_scene')}}</option>
          <option>乾燥・広がり</option>
          <option>くせ毛</option>
          <option>頭皮</option>
          <option>ダメージ</option>
        </select>
      </div>

      @error('description')
      <p class="error">{{$message}}</p>
      @enderror
        <div class="product_input">
          <textarea class="description" name="description">{{$product->description ?? old('description')}}</textarea>
        </div>

      @error('image')
        <p class="error">{{$message}}</p>
      @enderror
      <div class="product_input">
        <img src="/{{$product->image}}"><br>
        <input class="img_send" type="file" name="image" name="image" value="{{ $product->image }}"><br>
    </div>

        <div class="btn">
          <input class="btn-primary" type="submit" id="submit" value="変更">
        </div>
      </form>

    </div>
  </div>
  @endsection
