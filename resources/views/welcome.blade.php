<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>トップページ</title>
    <link rel="stylesheet" href="{{ asset('css/OnlineReviews/common.css') }}">
      <!-- JQuery  script -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

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

    {{--  お問い合わせ  --}}
    <footer class="bg-dark pt-5 pb-5">
      <div class="container">
        <div class=" card-body text-center text-light">
          <a href="{{ route('contact.index') }}" id="contact-page">
            <h4>お問い合わせはこちらになります</h4>
          </a>
        </div>
      </div >
    </footer>

</body>
</html>















