@vite(['public/css/inquiry.css'])
@extends('layouts.layouts')
@section('content')
<div class="container">
  <div class="h1">お問い合わせ</div>

  <form method="post" action="{{route('inquiry.store')}}">
    @csrf
    <div class="inputs">

      @error('name')
      <p class="error">{{$message}}</p>
      @enderror
      <label for="name">氏名</label>
      <input type="text" name="name" placeholder="氏名" value="{{ old('name') }}">
    </div>

    @error('email')
    <p class="error">{{$message}}</p>
    @enderror
    <div class="inputs">
      <label for="email">メールアドレス</label>
      <input  type="text" name="email" placeholder="example@co.jp" value="{{ old('email') }}">
    </div>

    @error('inquiry')
    <p class="error">{{$message}}</p>
    @enderror
    <div class="inputs">
      <label for="inruiry">お問い合わせ内容</label>
      <div>
        <textarea name="inquiry" placeholder="ご質問・お問い合わせ内容を入力してください" value="{{ old('message') }}"></textarea>
      </div>
    </div>
    <div class="btn">
      <input type="submit" class="btn-primary">
    </div>
  </form>
</div>
@endsection
