<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>トップページ</title>
    <link rel="stylesheet" href="{{ asset('css/OnlineReviews/common.css') }}">
</head>
<body>
    <div class="wrapper">
        <header>
        @component('components.shop_header')
            @slot('header')
            @endslot
        @endcomponent
        </header>

        <div class="main">
        @component('shops.shop_list')
            @slot('list')
            @endslot
        @endcomponent
        </div>

        
    </>
</body>
</html>