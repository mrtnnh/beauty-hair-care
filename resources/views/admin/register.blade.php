@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="h1">新規登録</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.register') }}">
                        @csrf

                        <div class="inputbox">
                            <label for="name" class="col-md-4 col-form-label text-md-end">名前</label>

                            @error('name')
                                <div class="invalid-feedback" role="alert">
                                    <strong class="error">{{ $message }}</strong>
                                </div>
                            @enderror

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            </div>
                        </div>
                        <div class="inputbox">
                            <label for="email" class="col-md-4 col-form-label text-md-end">メールアドレス</label>
                            @error('email')
                                <div class="invalid-feedback" role="alert">
                                    <strong class="error">{{ $message }}</strong>
                                </div>
                            @enderror

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            </div>
                        </div>

                        <div class="inputbox">
                            <label for="password" class="col-md-4 col-form-label text-md-end">パスワード</label>

                            @error('password')
                                <div class="invalid-feedback" role="alert">
                                    <strong class="error">{{ $message }}</strong>
                                </div>
                            @enderror

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            </div>
                        </div>

                        <div class="inputbox">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">パスワード確認</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="btn">

                                <button type="submit" class="btn-primary">
                                    登録
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
