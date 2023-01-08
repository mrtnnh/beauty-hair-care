@vite(['public/css/product_edit.css'])
@extends('layouts.admin')
@section('content')
<div class="container">

  <div class="border">
    <div class="h1">商品登録</div>
  </div>
  <div class="prpduct_wrap">
    <form action="{{route('product_register.store')}}" method="post" enctype="multipart/form-data">
      @csrf

      @error('category')
      <p class="error">{{$message}}</p>
      @enderror
      <div class="product_input">
        <label for="category">カテゴリー</label><br>
        <select name="category">
          <option value="{{old('category') }}">{{ old('category') }}</option>
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
        <input class="product_data" type="text" name="brand" value="{{ old('brand') }}">
      </div>

      @error('product_name')
      <p class="error">{{$message}}</p>
      @enderror
      <div class="product_input">
        <label for="product_name">商品名</label><br>
        <input class="product_data" type="text" name="product_name" value="{{ old('product_name') }}">
      </div>

      @error('price')
      <p class="error">{{$message}}</p>
      @enderror
      <div class="product_input">
        <label for=price"">価格</label><br>
        <input class="product_data" type="text" name="price"  value="{{ old('price') }}">
      </div>

      @error('stock')
      <p class="error">{{$message}}</p>
      @enderror
      <div class="product_input">
        <label for="stock">在庫数</label><br>
        <input class="product_data" type="text" name="stock"  value="{{ old('stock') }}">
      </div>

      @error('use_scene')
      <p class="error">{{$message}}</p>
      @enderror
      <div class="product_input">
        <label for="use_scene">悩み</label><br>
        <select name="use_scene">
          <option value="{{old('uae_scene')}}">{{ old('uae_scene')}}</option>
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
        <textarea class="description" name="description">{{ old('description')}}</textarea>
      </div>



      @error('image')
      <p class="error"{{$message}}</p>
        @enderror
        <div class="product_input">
          <input class="img_send" type="file" name="image" name="image"><br>
        </div>

        <div class="btn">
          <input class="btn-primary" type="submit" id="submit" value="登録">
        </div>
      </form>

    </div>
  </div>
  @endsection
