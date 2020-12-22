<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    {{-- HTMLヘッダ --}}
    @include("layouts.head")

    {{-- 本体 --}}
    <body class="c-app @yield('main_style_class')">
      {{-- サイドバー --}}
      @include("layouts.sidebar")
      <div class="c-wrapper c-fixed-components">

        {{-- ナビゲーションヘッダー --}}
        @include("layouts.navigation_header")

        {{-- コンテンツ --}}
        <div class="c-body">
          {{-- コンテンツ本体 --}}
          @yield('content')

          {{-- フッター --}}
          @include("layouts.footer")
        </div>
      </div>

      <script>
        $(document).ready(function() {
          bootstrap.initDashboardPageCharts();
        });
      </script>
      {{-- 個別のjavaScript読み込み --}}
      @yield('javascript-footer')
    </body>

    {{-- フッター部に記述するJavaScripts --}}
    @include("layouts.javascripts")
</html>