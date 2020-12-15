{{-- ベーステンプレート呼び出し --}}
@extends('layouts.layout_common')

{{-- ヘッダー枠の個別JavaScript追加エリア --}}
@section('javascript-head')
@endsection

{{-- 個別CSS追加エリア --}}
@section('css')
@endsection


{{-- ここからページ本体のコード --}}
@section('content')
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                Google Maps
              </div>
              <div class="card-body ">
                <div id="map" class="map"></div>
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