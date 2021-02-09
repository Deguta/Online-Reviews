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
              <div class="text">{!! nl2br(e(Str::limit($review->text, 100))) !!}</div>
               <a href="{{ route('online_reviews.show',[$review->text]) }}">投稿の詳細を読む</a>
            </div>
            <div class="date-container">
              <span class="date">
                  投稿日時 {{ $review->created_at }}
              </span>
            </div>
            @endforeach
             {{ $reviews->links(('pagination.mypagination')) }} 
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
              <div class="post-field">
                <label for="title-display">タイトル<label>
                <input type="text" name="title" id="title-field" placeholder="タイトル入力" >
                
                
                <div class="post-text">
                  <label>投稿文を入力して下さい</label><br>
                  <textarea name="text" rows="2" cols="50" placeholder="255文字まで投稿"></textarea><br>
                </div>
                    <a id="back-btn" href="{{ route('shop.list') }}">一覧に戻る</a>
                    <button type="reset" value="リセットする">リセット</button>
                    <button type="submit" value="投稿する">投稿する</button>
                </div>
              </div>
            </form>
        </div>
    </div>
  </body>
</html>

{{--  
変数確認用 @if(isset($review))
    <p>$review</p>
@else
    <p>メッセージは存在しません。</p>
@endif  --}}