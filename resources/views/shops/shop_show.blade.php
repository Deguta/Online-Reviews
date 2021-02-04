<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>トップページ</title>
    <link rel="stylesheet" href="{{ asset('css/Shops/shop_list.css') }}">
</head>
<body>
    <div class="wrapper">
      
        <header>
        @component('components.shop_header')
          @slot('header')
          @endslot
        @endcomponent
        </header>

        <div class="content">
          <div class="list-box">
            <div class="list-container">
              <div class="hospital-name">A病院</div>
              <div class="address-name">大阪府大阪市</div>
            </div>

            @foreach ($reviews as $review)
            <div class="posted-table">
              <div class="posted-header">
                <div class="user-id">User-ID {{ $review->user_id }}</div>
                <div class="title">タイトル {{ $review->title}}</div>
              </div>
            </div>

            <div class="text-container">投稿内容
              <div class="text"> {{ $review->text}}</div>
            </div>

            <div class="date-container">
              <span class="date">
                  投稿日時 {{ $review->created_at }}
              </span>
            </div>
            @endforeach
          </div>

           @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form method="POST" action="{{ route('online_reviews.store')}}">
            @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" placeholder="タイトル" value="">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" placeholder="投稿内容を入れて下さい"></textarea>
                </div>
                <a href="{{ route('shop.list') }}">病院一覧に戻る</a>
                <button type="submit" class="btn btn-success btn-block">投稿する</button>
            </form>
        </div>
    </div>
  </body>
</html>