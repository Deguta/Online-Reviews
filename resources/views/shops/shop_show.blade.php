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
        </div>





        {{--  <form method="POST" action="{{ route('online_reviews.store')}}">
                @csrf
                <label for="title">タイトル</label>
                <input id="title" name="title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" value="{{ old('title') }}" type="text">
                    @if ($errors->has('title'))
                            <div class="invalid-feedback">
                                    {{ $errors->first('title') }}
                            </div>
                    @endif

                <textarea id="text" name="text" class="form-control {{ $errors->has('text') ? 'is-invalid' : '' }}">value="{{ old('text') }}"</textarea>
                    @if ($errors->has('text'))
                        <div class="invalid-feedback">
                            {{ $errors->first('text') }}
                        </div>
                    @endif

                <div class="form-btn">
                    <a href="{{ route('shop.list') }}">病院一覧に戻る</a>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </div>
        </form>  --}}
    </div>
  </body>
</html>

{{--  @foreach ($reviews as $review)
          <div class="posted-table">
            <div class="user-container">
              <div class="user-id">User-ID</div>
              <div class="user-id-display">{{ $review->user_id}}</div>
            </div>

            <div class="title-container">
              <div class="title">タイトル</div>
              <div class="title-displa">{{ $review->title}}</div>
            </div>

            <div class="text-container">
              <div class="text">投稿内容</div>
              <div class="text-display">{{ $review->text}}
              </div>
            </div>

            <div class="date-container">
              <div class="date">日付</div>
              <div class="text-display">{{ $review->created_at}}
              </div>
            </div>
          </div>
        @endforeach  --}}