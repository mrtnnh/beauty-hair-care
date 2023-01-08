<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>beauty hair care</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['public/css/layouts.css','resources/js/app.js'])

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
              <div class="background">
              <div class="title_box">
                <a class="title" href="{{ route('home') }}">
                    beauty hair care
                </a>
              </div>

                    <!-- Right Side Of Navbar -->
                    <div class="navwrap">
                    <div class="nav_box">
                    <ul class="navbar-nav ms-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">ログイン</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">新規アカウント作成はこちら</a>
                                </li>
                            @endif

                            @if (Auth::guest())
                                <li>
                                  <a>ゲスト</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>


                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                      ログアウト
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                  </div>
                  <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
                      <!-- Left Side Of Navbar -->
                      <!-- <ul class="navbar-nav me-auto"> -->

                      <!-- </ul> -->
                    <!-- </div> -->
                    <div class="imgbox">
                      <div class="nav_img">
                        <a href="{{route('search')}}">
                          <img src="/img/search.png" alt="search">
                        </a>
                      </div>
                      <div class="nav_img">
                        <a href="{{route('cart')}}">
                        <img src="/img/cart.png" alt="cart">
                        </a>
                      </div>
                      <div class="nav_img">
                        <a href="{{route('mypage')}}">
                        <img src="/img/mypage.png" alt="mypage">
                       </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <footer>
          <div class="page_bottom">
            <a href="{{route('inquiry')}}">お問い合わせ</a>
          </div>
        </footer>
    </div>
</body>
</html>
