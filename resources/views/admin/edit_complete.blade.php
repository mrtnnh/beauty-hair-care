@extends('layouts.admin')
@section('content')
<div class="container">
  <div class="h1">完了</div>

<form action="{{route('admin.mypage')}}">
  <div class="btn">
    <input class="btn-primary" type="submit" value="戻る">
  </div>
</form>
</div>
@endsection
