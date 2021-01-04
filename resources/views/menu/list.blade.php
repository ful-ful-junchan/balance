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
        <main class="c-main">
          <div class="container-fluid">
            <div class="fade-in">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header">
                      <strong class="fnt-large">メニュー一覧</strong>
                      <small class="float-right"><a href="{{ url('/menu/Add') }}" class="btn btn-success btn-sm">新規追加</a></small>
                    </div>
                    <div class="card-body">
                      @foreach($menuList as $sectionType => $parentMenuList)
                        <ul class="list-group list-space">
                          <li class="list-group-item active">{{ $menuSectionList[$sectionType] }}</li>
                          <li class="list-group-item">
                            @foreach($parentMenuList as $menuMasterId => $menu)
                              <div class="accordion" id="acd-menu-{{ $menuMasterId }}">
                                <div class="card">
                                  <div class="card-header" id="heading-{{ $menuMasterId }}">
                                    <h3 class="mb-0">
                                      <button type="button" class="btn btn-secondary btn-block text-left" data-toggle="collapse" data-target="#collapse-{{ $menuMasterId }}" aria-expanded="true" aria-controls="collapse-{{ $menuMasterId }}">
                                        <div class="row">
                                          <div class="col-sm-10">
                                            {{ $menu['menu_title'] }}
                                            @if (isset($menu['childMenuList']))
                                              <span class="badge badge-success">{{ count($menu['childMenuList']) }}</span>
                                            @endif
                                          </div>
                                          <div class="col-sm-2 float-right">
                                            <a href="{{ url('/menu/Edit') }}/{{ $menuMasterId }}" class="btn btn-sm btn-info">編集</a>
                                            &nbsp;
                                            <a href="" class="btn btn-sm btn-danger">削除</a>
                                          </div>
                                        </div>
                                      </button>
                                    </h3>
                                  </div>
                                  {{-- 子メニュー --}}
                                  @if (isset($menu['childMenuList']))
                                    <div id="collapse-{{ $menuMasterId }}" class="collapse" aria-labelledby="heading-{{ $menuMasterId }}" data-parent="#acd-menu-{{ $menuMasterId }}">
                                      <div class="card-body">
                                        <table class="table table-responsive-sm table-striped">
                                          <thead>
                                            <tr>
                                              <th>Menu Title</th>
                                              <th>URL</th>
                                              <th>icon</th>
                                              <th>order</th>
                                              <th>編集/削除</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            @foreach($menu['childMenuList'] as $childMenu)
                                              <tr>
                                                <td>{{ $childMenu['menu_title'] }}</td>
                                                <td>{{ $childMenu['url'] }}</td>
                                                <td><i class="{{ $childMenu['icon'] }}"></i> {{ $childMenu['icon'] }}</td>
                                                <td>{{ $childMenu['order'] }}</td>
                                                <td>
                                                  <a href="{{ url('/menu/Edit') }}/{{ $childMenu['menu_master_id'] }}" class="btn btn-sm btn-info">編集</a>
                                                  &nbsp;
                                                  <a href="" class="btn btn-sm btn-danger">削除</a>
                                                </td>
                                              </tr>
                                            @endforeach
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  @endif
                                </div>
                              </div>
                            @endforeach
                          </li>
                        </ul>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
{{-- ここまでページ本体のコード --}}
@endsection

{{-- フッター枠の個別JavaScript追加エリア --}}
@section('javascript-footer')
@endsection