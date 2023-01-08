@vite(['public/css/home.css'])

@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
  <div class="h1">NEW ITEM</div>
  <div class="newitem">

    <div class="newitem_table">
      @foreach($products as $product)
      <div class="newitem_tr">
        <div class="newitem_img">
          <a href="home/product/{{ $product->id }}"><img  src="/{{$product->image}}"></a>
        </div>
        <div class="newitem_text">
        <div ><a href="home/product/{{ $product->id }}">{{ $product->product_name }}</a></div>
        <div ><a href="home/product/{{ $product->id }}">￥{{ $product->price }}</a></div>
      </div>
      </div>
      @endforeach
    </div>

    <form action="{{route('admin.newitem')}}">
      <div class="btn">
          <button type="submit" class="btn-primary">新着アイテム一覧を見る</button>
      </div>
    </form>
  </div>

  <div class="h1">RECOMMEND</div>
  <div class="recommend_wrap">

    <div class="recommend_contents">
      <dl>
        <dd><img src="/img/recommend.jpg"></dd>
        <dd>〇〇ヘアオイル</dd>
        <dd>￥2000</dd>
      </dl>
    </div>

    <div class="recommend_contents">
      <dl>
        <dd><img src="/img/recommend1.jpg"></dd>
        <dd>〇〇ヘアミルク</dd>
        <dd>￥2000</dd>
      </dl>
    </div>

    <div class="recommend_contents">
      <dl>
        <dd><img src="/img/recommend2.jpg"></dd>
        <dd>〇〇ウォータートリートメント</dd>
        <dd>￥2000</dd>
      </dl>
    </div>

    <div class="recommend_contents">
      <dl>
        <dd><img src="/img/recommend3.jpg"></dd>
        <dd>〇〇シャンプー</dd>
        <dd>￥2000</dd>
      </dl>
    </div>

    <div class="recommend_contents">
      <dl>
        <dd><img src="/img/recommend4.jpg"></dd>
        <dd>〇〇ヘアオイル</dd>
        <dd>￥2000</dd>
      </dl>
    </div>

</div>
</div>
@endsection
