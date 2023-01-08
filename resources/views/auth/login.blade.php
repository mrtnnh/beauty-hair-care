@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="h1">ログイン</div>

        <div class="card-body">
          <form method="POST" action="{{ route('login') }}">
            @csrf

          </div>
          <div class="inputbox">
            <label for="email" class="col-md-4 col-form-label text-md-end">メールアドレス</label>

            @error('email')
            <div class="invalid-feedback" role="alert">
              <strong style="color:#dc143c">{{ $message }}</strong>
            </div>
            @enderror

            <div class="col-md-6">
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            </div>
          </div>

          <div class="inputbox">
            <label for="password" class="col-md-4 col-form-label text-md-end">パスワード</label>

            @error('password')
            <div class="invalid-feedback" role="alert">
              <strong style="color:#dc143c">{{ $message }}</strong>
            </div>
            @enderror

            <div class="col-md-6">
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            </div>
          </div>

          <div class="row mb-0">
            <div class="btn">
              <button type="submit" class="btn-primary">
                ログイン
              </button>

              @if (Route::has('password.request'))
              <a class="btn btn-link" href="{{ route('password.request') }}">
                パスワードを忘れた方はこちら
              </a>
              @endif

            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
