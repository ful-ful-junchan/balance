<div class="sidebar" data-color="orange">
<!--
    Color Type: blue | green | orange | red | yellow
-->
  <div class="logo">
    <a href="#" class="simple-text logo-normal">{{ config('app.name', 'Title None') }}</a>
  </div>
  <div class="sidebar-wrapper" id="sidebar-wrapper">
    <ul class="nav">
      @foreach($sidebarList as $key => $sidebar)
        @if ( $sidebar['id'] == $currentSidebar['id'] )
          <li class="active">
        @else
          <li class="">
        @endif

        <a href="{{ url($sidebar['url'] . '?menuId=' . $sidebar['id']) }}">
          <i class="now-ui-icons {{ $sidebar['icon'] }}"></i>
          <p>{{ $sidebar['title'] }}</p>
        </a>
        </li>
      @endforeach
    </ul>
  </div>
</div>