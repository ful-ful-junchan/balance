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
@section('main_style_id')
main-panel-login
@endsection


{{-- ここからページ本体のコード --}}
@section('content')

<div class="panel-header panel-header-sm">
	<p>{{ config('app.name') }}</p>
</div>
<div class="content">
    <div class="row">
    	<div class="col-md-5 block-center mg-top-100">
            <div class="card">
              <div class="card-header">
                <h5 class="title">新規登録</h5>
              </div>
              <div class="card-body">
                <form method="POST" action="{{ url('/register') }}">
                  @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('string.Auth.Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('string.Auth.E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('string.Auth.Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('string.Auth.Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('string.Auth.Register') }}
                            </button>
                        </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
    </div>
</div>

{{-- フッター --}}
@include("layouts.footer")

{{-- ここまでページ本体のコード --}}
@endsection


{{-- フッター枠の個別JavaScript追加エリア --}}
@section('javascript-footer')
@endsection
