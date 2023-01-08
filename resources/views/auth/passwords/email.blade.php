@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="h1">パスワードリセット</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="text">
                    <p>パスワードをリセットするリンクをメールで送信します</p>
                  </div>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

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

                        <div class="row mb-0">
                            <div class="btn">
                                <button type="submit" class="btn-primary">
                                    送信
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
