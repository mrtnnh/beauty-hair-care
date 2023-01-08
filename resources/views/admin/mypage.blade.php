@vite(['public/css/mypage.css'])
@extends('layouts.admin')

@section('content')
<div class="container">

    <div class="border">
      <div class="h1">マイページ</div>
    </div>

    <div class="content_wrap">

    <div class="mypage_contents">
      <div class="section_title">
        <h2><a href="{{route('admin.register')}}">管理項目</a></h2>
      </div>
    </div>

    <div class="mypage_contents">
      <div>
        <h2><a href="{{route('admin.register')}}">アカウントの新規作成はこちらから</a></h2>
      </div>
      <div>
        <h2><a href="{{route('users_table')}}">登録ユーザ一覧</a></h2>
      </div>
      <div>
        <h2><a href="{{route('product_register')}}">商品の登録</a></h2>
      </div>
      <div>
        <h2><a href="{{route('products_table')}}">商品の削除・編集</a></h2>
      </div>

    </div>
  </div>
</div>

@endsection
