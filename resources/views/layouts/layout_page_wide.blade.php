<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    {{-- HTMLヘッダ --}}
    @include("layouts.head")

    {{-- 本体 --}}
    <body class="c-app @yield('main_style_class')">
      {{-- コンテンツ本体 --}}
      @yield('content')

      {{-- 個別のjavaScript読み込み --}}
      @yield('javascript-footer')
    </body>

    {{-- フッター部に記述するJavaScripts --}}
    @include("layouts.javascripts")
</html>