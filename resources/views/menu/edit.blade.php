{{-- ベーステンプレート呼び出し --}}
@extends('layouts.layout_common')

{{-- ヘッダー枠の個別JavaScript追加エリア --}}
@section('javascript-head')
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script type="text/javascript">$('#icon-select').selectpicker();</script>
@endsection

{{-- 個別CSS追加エリア --}}
@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
@endsection


{{-- ここからページ本体のコード --}}
@section('content')
        <main class="c-main">
          <div class="container-fluid">
            <div class="fade-in">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header"><h3>メニュー一覧</h3></div>
                    <form class="form-horizontal" action="{{ url('/menu/Edit/') }}/{{ $menu->menu_master_id }}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="card-body">
                        <input type="hidden" name="menu_type" value={{ $menu->menu_type }} />

                        <div class="form-group row">
                          <label class="col-md-3 col-form-label" for="section_type">セクション</label>
                          <div class="col-md-9">
                            <select id="section_type" name="section_type" class="form-control">
                              <option value="">セクション選択</option>
                              @foreach($sectionList as $sectionType => $sectionName)
                                <option value="{{ $sectionType }}"
                                @if ($sectionType == $menu->section_type)
                                  selected="selected"
                                @endif
                                >{{ $sectionName }}</option>
                              @endforeach
                            </select>
                            @if ($errors->first('section_type'))
                              <div class="invalid-feedback validation">{{$errors->first('section_type')}}</div>
                            @endif
                          </div>
                        </div>

                        @if ($menu->menu_type == MenuModel::MENU_TYPE_CHILDREN)
                          <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="menu_title">親メニュー</label>
                            <div class="col-md-9">
                              <select class="form-control @error('parent_menu_id') is-invalid @enderror" name="parent_menu_master_id">
                                <option value="0">親メニュー選択</option>
                                @foreach($parentMenuList as $parentMenu)
                                  <option value="{{ $parentMenu->menu_master_id }}"
                                  @if ($menu->parent_menu_master_id == $parentMenu->menu_master_id)
                                    selected="selected"
                                  @endif
                                  >{{ $parentMenu->menu_title }}</option>
                                @endforeach
                              </select>
                              @if ($errors->first('parent_menu_id'))
                                <div class="invalid-feedback validation">{{$errors->first('parent_menu_id')}}</div>
                              @endif
                            </div>
                          </div>
                        @endif

                        <div class="form-group row">
                          <label class="col-md-3 col-form-label" for="menu_title">タイトル</label>
                          <div class="col-md-9">
                            <input class="form-control @error('menu_title') is-invalid @enderror" id="menu_title" type="text" name="menu_title" value="{{ $menu->menu_title }}" require placeholder="Menu Title">
                            @if ($errors->first('menu_title'))
                              <div class="invalid-feedback validation">{{$errors->first('menu_title')}}</div>
                            @endif
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-md-3 col-form-label" for="url">URL</label>
                          <div class="col-md-9">
                            <input class="form-control @error('url') is-invalid @enderror" id="url" type="text" name="url" value="{{ $menu->url }}" require placeholder="URL">
                            @if ($errors->first('url'))
                              <div class="invalid-feedback validation">{{$errors->first('url')}}</div>
                            @endif
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-md-3 col-form-label" for="icon">アイコン</label>
                          <div class="col-md-9">
                            <select id="icon-select" class="form-control" data-show-content="true" name="icon">
                              <option value="">アイコン選択</option>
                              @foreach($iconList as $icon)
                                <option value="{{ $icon->class }}"
                                @if ($icon->class == $menu->icon)
                                  selected="selected"
                                @endif
                                >{{ $icon->class }}</option>
                              @endforeach
                            </select>
                            @if ($errors->first('icon'))
                              <div class="invalid-feedback validation">{{$errors->first('icon')}}</div>
                            @endif
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-md-3 col-form-label" for="order">表示順</label>
                          <div class="col-md-9">
                            <input class="form-control @error('order') is-invalid @enderror" id="order" type="number" name="order" value="{{ $menu->order }}" require placeholder="表示順">
                            @if ($errors->first('order'))
                              <div class="invalid-feedback validation">{{$errors->first('order')}}</div>
                            @endif
                          </div>
                        </div>
                      </div>

                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">更新</button>
                        <a href="{{ url('/menu/List') }}" class="btn btn-secondary">戻る</a>
                      </div>
                    </form>
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