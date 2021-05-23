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

        {{--  Study-Of-PostSiteの概要  --}}
    <section class="border border-dark bg-light">
      <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center mt-5">
                    <h1 id="description">
                      Study-Of-PostSiteとは?
                    </h1>
                </div>
                <p class="text-center h2-desc font-weight-bold">皆さんの学習状況を投稿しあう投稿サイトになります。</p>
                <p class="text-center h2-desc font-weight-bold">誹謗中傷の投稿は削除させていただきます。</p>
                <p class="text-center h2-desc font-weight-bold">皆さんで学習のモチベーションを高め合いましょう!!</p>

                <div class="text-center mt-5 mb-5">
                    <a href="{{ route('bulletin-board.create') }}" class="btn btn-danger btn-lg"><i class="fa fa-edit mr-2"></i>投稿はこちらになります</a>
                </div>
            </div>
        </div>
      </div>
    </section>
        
        <footer>
        @component('components.shop_footer')
          @slot('footer')
          @endslot
        @endcomponent
        </footer>
    </>
</body>
</html>















