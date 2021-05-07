@extends('layout.bulletin-board-common')
@section('title', 'お問い合わせ確認画面')
<link rel="stylesheet" href="{{ asset('/css/bulletin-board/index-list.css') }}" >
<link rel="stylesheet" href="{{ asset('/css/bulletin-board/index-list.css') }}" media="screen and (max-width:750px)" >

<header>
  @component('components.header')
      @slot('header')
      @endslot
  @endcomponent
</header>

@section('content')
  <form method="POST" action="{{ route('contact.send') }}">
    @csrf
    <div class="container">
      <div class="panel-default  w-75  mx-auto card mt-5">
        <div class="panel-heading  h2 p-3 text-center bg-dark text-white">お問い合わせフォーム 確認画面</div>
        <div class="panel-body">
            <div class="form-group">
              <div class="my-3 mx-auto col-md-7">
                <label for="inputTitle">メールアドレス</label>
                {{ $inputs['email'] }}
                {{--  index.blade.phpにある'email'を関数化して橋渡ししたもの.また、csrf対策もしている--}}
                  <input name="email" value="{{ $inputs['email'] }}" type="hidden">
              </div>
            </div>

            <div class="form-group">
              <div class="my-3 mx-auto col-md-7">
                <label for="inputTitle">件名</label>
                    {{ $inputs['title'] }}
                {{--  index.blade.phpにある'title'を関数化して橋渡ししたもの.また、csrf対策もしている--}}
                <input name="title" value="{{ $inputs['title'] }}" type="hidden">
              </div>
            </div>

            <div class="form-group">
              <div class="my-3 mx-auto col-md-7">
                <label for="inputTitle">お問い合わせ内容</label>
                {!! nl2br(e($inputs['body'])) !!}
                <input name="body" value="{{ $inputs['body'] }}" type="hidden">
              </div>
            </div>

            <div class="form-group row  mt-5 justify-content-around">
              <button class="btn bg-primary  text-white btn-lg" type="submit" name="action" value="submit">投稿内容を送信する</button> 
              <button class="btn bg-danger text-white  btn-lg" onclick="history.back(-1)">投稿を修正する</button>

            </div>
            
        </div>
      </div>
    </div>
  </form>
@endsection