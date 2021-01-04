<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
  {{-- ロゴ --}}
  <div class="c-sidebar-brand d-lg-down-none">
    <h2>{{ config('app.name', 'Title None') }}</h2>
  </div>
  {{-- サイドバー --}}
  <ul class="c-sidebar-nav">
    @foreach($sidebarList as $sectionType => $sidebarList2)
      <li class="c-sidebar-nav-title">{{ $menuSectionList[$sectionType] }}</li>
      @foreach($sidebarList2 as $menuMasterId => $sidebar)
        {{-- 親メニュー --}}
        <li class="{{ $sidebar['tag_li_class'] }}">
          <a class="{{ $sidebar['tag_a_class'] }}" href="{{ $sidebar['url'] }}">
            {{-- 親メニュー --}}
            <div class="c-sidebar-nav-icon">
              <i class="{{ $sidebar['icon'] }}"></i>
            </div>
            {{ $sidebar['menu_title'] }}
          </a>
          @if ( $sidebar['is_dropdown'] )
            <ul class="c-sidebar-nav-dropdown-items">
              @foreach( $sidebar['childMenuList'] as $items )
                <li class="{{ $items['tag_li_class'] }}">
                  <a class="{{ $items['tag_a_class'] }}" href="{{ $items['url'] }}">
                    <i class="{{ $items['icon'] }}"></i>　{{ $items['menu_title'] }}
                  </a>
                </li>
              @endforeach
            </ul>
          @endif
        </li>
      @endforeach
    @endforeach
  </ul>
  <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>