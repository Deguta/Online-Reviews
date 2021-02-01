<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>YM-PortFolio</title>
    <link rel="stylesheet" href="{{ asset('css/OnlineReviews/top_page.css') }}">
    <link href="{{asset('/assets/css/reset.css')}}" rel="stylesheet">
</head>
    <body>
        <div class="wrapper">
            <header>
            @if (Route::has('login'))
                <div class="header-left">ロゴtest</div>

                <div class="header-right">
                    @auth
                        <a href="{{ url('/home') }}">ログアウトはこちら</a>
                    @else
                        <div class=login>
                            <a href="{{ route('login') }}">ログイン</a>
                        </div>
                        <div class=register>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">新規会員はこちら</a>
                        @endif
                        </div>
                    @endauth
                </div>
                @endif
            </header>

            <div class="main">mainページ
                <a href="{{route('shop.list')}}">お店一覧へ</a>
            </div>
        </div>
    </body>
</html>

