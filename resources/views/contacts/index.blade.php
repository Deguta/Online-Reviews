@extends('layouts.common')

@section('content')
<form method="POST" action="{{ route('contact.confirm') }}">
  @csrf
  <div class="container">

    <div class="panel-default  w-75  mx-auto card mt-5">

      <p class="panel-heading  h2 p-3 text-center bg-dark text-white">お問い合わせフォーム</p>

      <div class="panel-body">
          <div class="form-group">

            <div class="my-3 mx-auto col-md-7">
              <label for="inputTitle">メールアドレス</label>
              <input type="text" class="form-control @if($errors->has('email')) is-invalid @endif"  placeholder="メールアドレスを入力して下さい" name="email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                <p class="error-message invalid-feedback">{{ $errors->first('email') }}</p>
                @endif
            </div>

          </div>


          <div class="form-group">

            <div class="my-3 mx-auto col-md-7 md-offset-5">
              <label for="inputTitle">件名</label>
              <input type="text" class="form-control @if($errors->has('title')) is-invalid @endif"  placeholder="件名を入力して下さい" name="title" value="{{ old('title') }}">
                @if ($errors->has('title'))
                <p class="error-message invalid-feedback">{{ $errors->first('title') }}</p>
                @endif
            </div>

          </div>


          <div class="form-group">

            <div class="my-3 mx-auto col-md-7 md-offset-5">
              <label for="inputTitle">本文入力</label>
              <textarea rows="7"  class="form-control mb-4 @if($errors->has('body')) is-invalid @endif"  placeholder="本文を入力して下さい" name="body" >{{ old('body') }}</textarea>
              @if ($errors->has('body'))
              <p class="error-message invalid-feedback">{{ $errors->first('body') }}</p>
              @endif

              <div class="form-group row  mt-5 justify-content-around">
                  <input type="submit" class="btn bg-primary text-white  btn-lg" id="page_back" value="投稿内容を送信" />
                  <input type="reset" class="btn bg-danger text-white" value="リセット" />
              </div>

            </div>

          </div>

      </div>

    </div>

  </div>

</form>
@endsection