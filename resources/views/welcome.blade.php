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

    {{--  Hospitals Reviewsへの概要  --}}
    <section class="border border-dark bg-light">
      <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center mt-5">
                    <h1 id="description">
                      ようこそHospitals Reviewsへ
                    </h1>
                </div>

                <div class="text-center mt-5 mb-5">
                    <a href="{{ route('shop.list') }}"class="btn btn-danger btn-lg"><i class="fa fa-edit mr-2"></i>投稿はこちらになります</a>
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















