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
        @if ( $sidebar['menu_master_id'] == $currentSidebar['menu_master_id'] )
          <li class="active">
        @else
          <li class="">
        @endif

        <a href="{{ url($sidebar['url'] . '?menuId=' . $sidebar['menu_master_id']) }}">
          <i class="now-ui-icons {{ $sidebar['icon'] }}"></i>
          <p>{{ $sidebar['menu_title'] }}</p>
        </a>
        </li>
      @endforeach
    </ul>
  </div>
</div>