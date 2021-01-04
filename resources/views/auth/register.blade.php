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
        <div class="card m-4">
          <div class="card-body p-4">
            <form method="POST" action="{{ url('register') }}">
              @csrf
              <h1>新規登録</h1>
              <p class="text-muted">必要情報を入力してください</p>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <svg class="c-icon">
                      <use xlink:href="{{ asset('img/sprites/free.svg#cil-user') }}"></use>
                    </svg>
                  </span>
                </div>
                <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required placeholder="{{ __('string.Auth.Name') }}">
                @if ($errors->first('name'))
                  <div class="invalid-feedback validation">{{$errors->first('name')}}</div>
                @endif
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <svg class="c-icon">
                      <use xlink:href="{{ asset('img/sprites/free.svg#cil-envelope-open') }}"></use>
                    </svg>
                  </span>
                </div>
                <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required placeholder="{{ __('string.Auth.E-Mail Address') }}">
                @if ($errors->first('email'))
                  <div class="invalid-feedback validation">{{$errors->first('email')}}</div>
                @endif
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
                @if ($errors->first('password'))
                  <div class="invalid-feedback validation">{{$errors->first('password')}}</div>
                @endif
              </div>

              <div class="input-group mb-4">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <svg class="c-icon">
                      <use xlink:href="{{ asset('img/sprites/free.svg#cil-lock-locked') }}"></use>
                    </svg>
                  </span>
                </div>
                <input id="password_confirmation" name="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" required placeholder="{{ __('string.Auth.Confirm Password') }}">
              </div>

              <div class="input-group mb-4">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <svg class="c-icon">
                      <use xlink:href="{{ asset('img/sprites/free.svg#cil-shield-alt') }}"></use>
                    </svg>
                  </span>
                </div>
                <select class="form-control" name="role">
                  <option value="">権限選択</option>
                  @foreach ($roleList as $key => $value)
                    <option value="{{ $key }}"
                      @if (old('role') == $key)
                        selected="selected"
                      @endif
                    >{{ $value }}</option>
                  @endforeach
                </select>
              </div>

              <button class="btn btn-block btn-success" type="submit">{{ __('string.Auth.Register') }}</button>
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