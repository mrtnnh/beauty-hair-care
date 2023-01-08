@vite(['public/css/users_table.css'])
@extends('layouts.admin')
@section('content')
<div class="container">
  <div class="border">
    <div class="h1">登録ユーザ一覧</div>
  </div>
    <table class="users_table">
      <tr>
        <td nowrap>ID</td>
        <td nowrap>氏名</td>
        <td nowrap>メールアドレス</td>
        <td nowrap>電話番号</td>
        <td nowrap>郵便番号</td>
        <td nowrap>都道府県</td>

      </tr>
      @foreach ($users as $user)

      <tr>
        <td nowrap>{{ $user->id }}</td>
        <td nowrap>{{ $user->name }}</td>
        <td nowrap>{{ $user->email }}</td>
        <td nowrap>{{ $user->tell }}</td>
        <td nowrap>{{ $user->postcode }}</td>
        <td nowrap>{{ $user->prefecture }}</td>

      </tr>
      @endforeach
    </table>
</div>
@endsection
