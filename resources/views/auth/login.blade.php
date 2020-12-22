{{-- ベーステンプレート呼び出し --}}
@extends('layouts.layout_page_wide')

{{-- ヘッダー枠の個別JavaScript追加エリア --}}
@section('javascript-head')
@endsection

{{-- 個別CSS追加エリア --}}
@section('css')
<link href="{{ asset('css/auth/auth.css') }}" rel="stylesheet" />
@endsection


{{-- メインスタイル用ID --}}
@section('main_style_class')
flex-row align-items-center
@endsection


{{-- ここからページ本体のコード --}}
@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card-group">
        <div class="card p-4">
          <div class="card-body">
            <form method="POST" action="{{ url('/login') }}">
              @csrf
              <h1>ログイン</h1>
              <p class="text-muted">メールアドレスとパスワードを入力してください</p>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <svg class="c-icon">
                      <use xlink:href="{{ asset('img/sprites/free.svg#cil-user') }}"></use>
                    </svg>
                  </span>
                </div>
                <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" alue="{{ old('email') }}" required placeholder="{{ __('string.Auth.E-Mail Address') }}">
              </div>
              <div class="input-group mb-4">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <svg class="c-icon">
                      <use xlink:href="{{ asset('img/sprites/free.svg#cil-lock-locked') }}"></use>
                    </svg>
                  </span>
                </div>
                <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" required placeholder="{{ __('string.Auth.Password') }}">
              </div>
              <div class="row">
                <div class="col-6">
                  <button class="btn btn-primary px-4" type="submit">{{ __('string.Auth.Login') }}</button>
                </div>
                <div class="col-6 text-right">
                  <a href="{{ url('/register') }}" class="btn btn-secondary">{{ __('string.Auth.Register') }}</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- ここまでページ本体のコード --}}
@endsection


{{-- フッター枠の個別JavaScript追加エリア --}}
@section('javascript-footer')
@endsection