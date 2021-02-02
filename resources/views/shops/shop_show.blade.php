<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>トップページ</title>
    <link rel="stylesheet" href="{{ asset('css/OnlineReviews/common.css') }}">
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

        <div class="list-box">
          <div class="list-container">
            <div class="hospital-name">A病院</div>
            <div class="address-name">大阪府大阪市</div>
          </div>
        </div>
        <div class="posted-table">
            @foreach ($names as $name)
                <p class="title-form">
                    <p class="title">投稿者
                    {{ $name->name}}
                    </p>
                </p>
            @endforeach

          @foreach ($reviews as $review)
            <p class="title-form">
                <p class="title">タイトル
                {{ $review->title}}
                </p>
            </p>
            <p class="title-form">
                <p class="title">投稿内容
                {{ $review->text}}
                </p>
            </p>
          @endforeach
        </div>

        <form method="POST" action="{{ route('online_reviews.store')}}">
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
        </form>
    </div>
  </body>
</html>