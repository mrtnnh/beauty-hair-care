@vite(['public/css/products_table.css'])
@extends('layouts.admin')

@section('content')

<div class="container">
  <div class="h1">商品情報</div>
  <table class="products_table">
    <tr class="products_table_title">
      <td>カテゴリ</td>
      <td>商品名</td>
      <td>値段</td>
      <td>在庫数</td>
      <td>登録日時</td>
      <td>更新日時</td>
      <td>編集</td>
      <td>削除</td>
    </tr>

    @foreach($products as $product)
    <tr class="products_table_info">
      <td>{{ $product->category }}</td>
      <td>{{ $product->product_name }}</td>
      <td>{{ $product->price }}</td>
      <td>{{ $product->stock }}</td>
      <td>{{ $product->created_at }}</td>
      <td>{{ $product->updated_at }}</td>
      <td><a href="{{route('product_edit',[$product->id]) }}"><button class="edit-btn">編集</button></a></td>
      <td><a href="{{route('product_delete',[$product->id]) }}" onclick="return confirm('本当に削除しますか？')"><button class="edit-btn">削除</button></a></td>
      @endforeach
    </tr>
  </table>
</div>

@endsection
