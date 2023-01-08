@vite(['public/css/search.css'])
@extends('layouts.admin')
@section('content')
<div class="container">

  <div class="border">
    <div class="h1">商品を探す</div>
  </div>

  <div class="content_wrap">
    <div class="search_input">
      <form action="{{route('admin.search.result')}}" method="POST">
        @csrf

        @error('search')
        <p class="error">{{$message}}</p>
        @enderror
      <label>キーワードを入力</label>
      <input type="search" name="search" placeholder="キーワードを入力" value="@if (isset($search)) {{ $search }} @endif">
      <input class="btn-primary" type="submit" value="検索">
    </div>

    <div class="category">
      <div class="category_title">
        <h2>カテゴリ</h2>
      </div>

      <div class="category_btn">
        <input class="sbtn-primary" type="submit" name="shampoo" value="シャンプー">
        <input class="sbtn-primary" type="submit" name="in_treatment" value="トリートメント" >
        <input class="sbtn-primary" type="submit" name="hairMilk" value="ヘアミルク">
        <input class="sbtn-primary" type="submit" name="out_treatment" value="アウトバストリートメント">
        <input class="sbtn-primary" type="submit" name="hairOil" value="ヘアオイル">
        <input class="sbtn-primary" type="submit" name="water_treatment" value="ウォータートリートメント">
        <input class="sbtn-primary" type="submit" name="etc" value="その他">
      </div>
    </div>

    <div class="use_scene">
      <div class="category_title">
        <h2>髪のお悩み</h2>
      </div>

      <div class="category_btn">
        <input  class="sbtn-primary" type="submit" name="dry" value="乾燥・広がり">
        <input  class="sbtn-primary" type="submit" name="curlyhair" value="くせ毛">
        <input  class="sbtn-primary" type="submit" name="damage" value="ダメージ">
        <input  class="sbtn-primary" type="submit" name="scalp" value="頭皮">
      </div>
    </div>
    </form>
  </div>
</div>
@endsection
