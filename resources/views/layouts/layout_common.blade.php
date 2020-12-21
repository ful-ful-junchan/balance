<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    {{-- HTMLヘッダ --}}
    @include("layouts.head")

    {{-- 本体 --}}
    <body class="c-app">
      {{-- サイドバー --}}
      @include("layouts.sidebar")
      <div class="c-wrapper c-fixed-components">

        {{-- ナビゲーションヘッダー --}}
        @include("layouts.navigation_header")

        {{-- コンテンツ --}}
        <div class="c-body">
          <main class="c-main">
            <div class="container-fluid">
              {{-- コンテンツ本体 --}}
              @yield('content')
            </div>
          </main>

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