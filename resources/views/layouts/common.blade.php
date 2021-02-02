//親テンプレート 共通
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/OnlineReviews/common.css') }}">
</head>
<body>
    <div class="wrapper">
        <header>
            @include('includes.shop_header')
        </header>

        <div class="main">
            @yield('content')
        </div>
        
        <footer>
        @include('includes.shop_footer')
        </footer>
    </>
</body>
</html>

















