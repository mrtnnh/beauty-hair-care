@vite(['public/css/mypage.css'])
@extends('layouts.layouts')

@section('content')
<div class="container">

  <div class="border">
    <div class="h1">マイページ</div>
  </div>

  <div class="content_wrap">
    @if(Auth::user())
    <div class="mypage_contents">

      <div class="section_title">
        <h2>登録情報の確認・変更</h2>
      </div>
      <p><a href="{{route('myinfo')}}">ご登録氏名・住所・メールアドレス・パスワードの変更はこちら</a></p>
    </div>

    <div class="mypage_contents">
      <div class="section_title">
        <h2>注文履歴</h2>
      </div>
      <div class="order">
        <a href="#">もっと見る</a>
      </div>
    </div>
    <div class="mypage_contents">
      <div class="section_title">
        <h2>お問い合わせ</h2>
      </div>
      <p><a href="{{route('inquiry')}}">ご質問・お問い合わせはこちら</a></p>
    </div>
    @endif

    @guest
    <div class="mypage_contents">
      <div class="section_title">
        <form method="POST" action="{{ route('mypage.store') }}">
          @csrf
          <h2>ログイン</h2>
        </div>

        @error('email')
        <p class="error">{{$message}}</p>
        @enderror
        <div class="mypage_input">
          <label for="email">メールアドレス</label>
          <input type="text" name="email" >
        </div>
        @error('password')
        <p class="error">{{$message}}</p>
        @enderror
        <div class="mypage_input">
          <label for="password">パスワード</label>
          <input type="password" name="password" >
        </div>

        @if (Route::has('password.request'))
        <a class="btn btn-link" href="{{ route('password.request') }}">
          パスワードを忘れた方はこちら
        </a>
        @endif

        <div class="mypage_input">
          <input class="btn-primary" type="submit" value="ログイン">
        </div>
      </form>
    </div>


    <div class="mypage_contents">
      <div class="section_title">
        <h2><a href="{{route('register')}}">新規登録</a></h2>
      </div>
      <p><a href="{{route('register')}}">アカウントの新規作成はこちらから</a></p>
    </div>

    <div class="mypage_contents">
      <div class="section_title">
        <h2><a href="{{route('inquiry')}}">お問い合わせ</a></h2>
      </div>
      <p><a href="{{route('inquiry')}}">ご質問・お問い合わせはこちらから</a></p>
    </div>
    @endguest

  </div>
</div>

@endsection
