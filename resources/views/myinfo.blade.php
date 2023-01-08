@vite(['public/css/myinfo.css'])
@extends('layouts.layouts')
@section('content')
<div class="container">
  <div class="border">
    <div class="h1">登録情報</div>
  </div>

    <div class="content_wrap">
      <form action="{{ route('myinfo.store') }}" method="POST">
        @csrf

        <div class="form_content">
          @error('name')
            <p class="error">{{$message}}</p>
          @enderror

          <label for="name">氏名</label><br>
          @foreach($myinfo as $key )
            <input type="text" name="name" value="{{ old('name') ?? $key->name }}"><br>
          @endforeach
        </div>

        <div class="form_content">
          @error('email')
            <p class="error">{{$message}}</p>
          @enderror
          <label for="email">メールアドレス</label><br>
          @foreach($myinfo as $key )
            <input  type="text" name="email"value="{{ old('email') ?? $key->email }}"><br>
          @endforeach
        </div>

        <div class="form_content">
          @error('tell')
            <p class="error">{{$message}}</p>
          @enderror
          <label for="tell">電話番号</label><br>
          @foreach($myinfo as $key )
            <input  type="text" name="tell" value="{{ old('tell') ?? $key->tell }}"><br>
          @endforeach
        </div>

        <p>登録住所</p>
        <div class="form_content">
          @error('postcode')
            <p class="error">{{$message}}</p>
          @enderror
          <label for="postcode">郵便番号</label><br>
          @foreach($myinfo as $key )
            <input  type="text" name="postcode" value="{{ old('postcode') ?? $key->postcode}}"><br>
          @endforeach
        </div>

        <div class="form_content">
          @error('prefecture')
            <p class="error">{{$message}}</p>
          @enderror
          <label for="prefecture">都道府県</label><br>
            <select name="prefecture">
            @foreach($myinfo as $key )
              <option value="{{ old('name') ?? $key->prefecture }}">{{ $key->prefecture }}</option>
            @endforeach
            @foreach(config('pref') as $key=>$score)
              <option value="{{ $score }}">{{ $score }}</option>
            @endforeach
          </select>
        </div>

        <div class="form_content">
          @error('address_city')
            <p class="error">{{$message}}</p>
          @enderror
          <label for="address_city">住所1</label><br>
          @foreach($myinfo as $key )
            <input  type="text" name="address_city" value="{{ old('address_city') ?? $key->address_city}}"><br>
          @endforeach
        </div>

        <div class="form_content">
          @error('address_street')
            <p class="error">{{$message}}</p>
          @enderror
          <label for="address_street">住所2</label><br>
          @foreach($myinfo as $key )
            <input  type="text" name="address_street" value="{{ old('address_street') ?? $key->address_street }}"><br>
          @endforeach
        </div>

        <div class="form_content">
          @error('building')
            <p class="error">{{$message}}</p>
          @enderror
          <label for="building">建物名</label><br>
          @foreach($myinfo as $key )
            <input  type="text" name="building" value="{{ old('building') ?? $key->building }}"><br>
          @endforeach
        </div>
        <div class="btn">
          <button type="submit" class="btn-primary" onclick="return confirm('本当に変更しますか？')">変更する</button>
        </div>
      </form>

      @if (Route::has('password.request'))
      <div class="btn">
        <a class="btn-primary" href="{{ route('password.request') }}">
          パスワード変更はこちら
        </a>
      </div>
      @endif

    </div>
  </div>
  @endsection
