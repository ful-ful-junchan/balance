<?php

namespace App\Models\Menu;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class MenuModel extends Model
{
    const MENU_TYPE_PARENT = 1; // 親メニュー
    const MENU_TYPE_CHILDREN = 2; // 子メニュー

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
     * @return []
     */
    public function getMenuList()
    {
        $list = MenuModel::orderBy('sort', 'asc')->get()->toArray();
        $menuListTmp = Arr::where($list, function( $value, $key ) { return $value['menu_type'] == MenuModel::MENU_TYPE_PARENT; });
        $menuKey = Arr::pluck($menuListTmp, 'menu_master_id');
        $menuList = array_combine($menuKey, $menuListTmp);
        foreach($list as $data) {
            if ($data['menu_type'] == MenuModel::MENU_TYPE_CHILDREN) {
                if (!isset($menuList[ $data['menu_master_id'] ]['childMenuList'])) $menuList[ $data['menu_master_id'] ]['childMenuList'] = [];
                $menuList[ $data['menu_master_id'] ]['childMenuList'][] = $data;
            }
        }
        return $menuList;
    }
}
