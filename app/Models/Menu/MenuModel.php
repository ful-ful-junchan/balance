<?php

namespace App\Models\Menu;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use phpDocumentor\Reflection\Types\Integer;

class MenuModel extends Model
{
    /** メニュー種別リスト */
    const MENU_TYPE_SECTION = 99; // セクション
    const MENU_TYPE_PARENT = 1; // 親メニュー
    const MENU_TYPE_CHILDREN = 2; // 子メニュー

    /** セクションリスト */
    const SECTION_TYPE_BALANCE = 100;  // 家計簿
    const SECTION_TYPE_SETTINGS = 200; // Settings
    const SECTION_TYPE_ADMIN = 999; // 管理者用

    /**
     * テーブル名
     * @var string
     */
    protected $table = 'menu_master';

    /**
     * プライマリID
     * @var string
     */
    protected $primaryKey = 'menu_master_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'menu_type', 'parent_menu_master_id', 'menu_title', 'sort',
    ];

    /**
     * セクション一覧を取得
     * @return string[]
     */
    public function getSectionList()
    {
        return [
            self::SECTION_TYPE_BALANCE => '家計簿',
            self::SECTION_TYPE_SETTINGS => 'Settings',
            self::SECTION_TYPE_ADMIN => '管理者用',
        ];
    }

    /**
     * メニュー種別リスト
     * @return string[]
     */
    public function getMenuTypeList()
    {
        return [
            self::MENU_TYPE_PARENT => '親メニュー',
            self::MENU_TYPE_CHILDREN => '子メニュー',
        ];
    }

    /**
     * メニュー一覧を取得
     * @param integer $currentMenuId
     * @return []
     */
    public function getMenuList( $currentMenuId = 0 )
    {
        $list = MenuModel::orderBy('order', 'asc')->get()->toArray();
        $menuListParent = Arr::where($list, function( $value, $key ) { return $value['menu_type'] == MenuModel::MENU_TYPE_PARENT; });
        $menuListChildren = Arr::where($list, function( $value, $key ) { return $value['menu_type'] == MenuModel::MENU_TYPE_CHILDREN; });
        $menuList = [];

        // 親メニューを生成
        foreach($menuListParent as $menu) {
            // 親メニュー用のクラスを設定
            $menu['tag_li_class'] = "c-sidebar-nav-item";
            $menu['tag_a_class'] = "c-sidebar-nav-link";

            // 現在のメニューをセット
            $menu['is_current'] = false;
            if ($currentMenuId == $menu['menu_master_id']) $menu[ 'is_current' ] = true;

            // ドロップダウンフラグ
            $menu['is_dropdown'] = false;

            // 表示用にURLを整形
            $this->setUrl($menu);

            $menuList[ $menu['section_type'] ][ $menu['menu_master_id'] ] = $menu;
        }

        // 子メニューを生成
        foreach($menuListChildren as $menu) {
            $sectionType = $menu['section_type'];
            $menuMasterId = $menu['parent_menu_master_id'];

            // 親メニュー用のクラスを設定
            $menu['tag_li_class'] = "c-sidebar-nav-item";
            $menu['tag_a_class'] = "c-sidebar-nav-link";

            // 子メニューがある場合、ドロップダウンメニューに変更するため親メニューのクラスを変更
            $menuList[$sectionType][$menuMasterId]['tag_li_class'] .= " c-sidebar-nav-dropdown";
            $menuList[$sectionType][$menuMasterId]['tag_a_class'] .= " c-sidebar-nav-dropdown-toggle";

            // ドロップダウンフラグ
            $menuList[$sectionType][$menuMasterId]['is_dropdown'] = true;

            // 現在のメニューをセット
            $menu['is_current'] = false;
            if ($currentMenuId == $menu['menu_master_id']) {
                $menu['is_current'] = true;
                $menu['tag_a_class'] .= " c-active";
                $menuList[$sectionType][$menuMasterId]['is_current'] = true;
            }

            // 表示用にURLを整形
            $this->setUrl($menu);

            if (!isset($menuList[$sectionType][$menuMasterId]['childMenuList'])) $menuList[$sectionType][$menuMasterId]['childMenuList'] = [];
            $menuList[$sectionType][$menuMasterId]['childMenuList'][] = $menu;
        }

        // 親メニューのアクティブ化
        foreach($menuList as $sectionType => $parentMenuList) {
            foreach($parentMenuList as $menuMasterId => $parentMenu) {
                if ($parentMenu['is_current'] && !isset($parentMenu['childMenuList'])) $parentMenu['tag_li_class'] .= " c-show";
                $parentMenuList[$menuMasterId] = $parentMenu;
            }
            $menuList[$sectionType] = $parentMenuList;
        }
        return $menuList;
    }

    /**
     * 表示用にURLを整形
     * @param array $menu
     * @return string
     */
    private function setUrl( array &$menu )
    {
        if (empty($menu['url'])) $menu['url'] = "#";
    }
}
