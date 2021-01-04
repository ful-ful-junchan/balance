<?php

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\AppController;
use Illuminate\Http\Request;
use App\Models\Menu\MenuModel;
use App\Models\Icon\IconModel;
use PharIo\Manifest\ElementCollectionException;

class MenuController extends AppController
{
    private $_menuModel;

    /**
     * バリデーションルール
     * @var array
     */
    const VALIDATION_ROLE = [
        'section_type' => ['required', 'integer'],
        'menu_type' => ['required', 'integer'],
        'parent_master_id' => ['integer'],
        'menu_title' => ['required', 'string'],
        'url' => ['string'],
        'icon' => ['string'],
    ];

    /**
     * メニューモデルを取得
     */
    private function _getModel()
    {
        if (!$this->_menuModel) {
            $this->_menuModel = new MenuModel();
        }
        return $this->_menuModel;
    }

    /**
     * メニューリスト
     */
    public function menuList()
    {
        // 現在のメニュー一覧を取得
        $this->_setResponse('menuList', $this->_getModel()->getMenuList());

        return $this->render('menu.list');
    }

    /**
     * 新規メニュー追加
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function addShow()
    {
        $this->_setResponse('parentMenuList', $this->_getModel()->getParentMenuList());
        $this->_setResponse('iconList', IconModel::get());
        $this->_setResponse('sectionList', $this->_getModel()->getSectionList());
        return $this->render('menu.add');
    }

    /**
     * メニュー編集画面
     * @param int $menuId
     */
    public function editShow($menuId)
    {
        $this->_setResponse('parentMenuList', $this->_getModel()->getParentMenuList());
        $this->_setResponse('menu', $this->_getModel()->getMenu($menuId));
        $this->_setResponse('iconList', IconModel::get());
        $this->_setResponse('sectionList', $this->_getModel()->getSectionList());
        return $this->render('menu.edit');
    }

    /**
     * メニュー編集
     * @param int $menuId
     */
    public function edit(Request $request, $menuId)
    {
        $validator = \Validator::make($request->all(), self::VALIDATION_ROLE);
        $validator->validate();

        \DB::beginTransaction();
        try {
            $data = [
                'section_type' => $request->section_type,
                'parent_menu_master_id' => $request->parent_menu_master_id,
                'menu_title' => $request->menu_title,
                'url' => $request->url,
                'icon' => $request->icon,
                'order' => $request->order,
            ];
            $data = MenuModel::where($this->_getModel()->primaryKey, $menuId)->update($data);
            \DB::commit();
        } catch(Exception $e) {
            \DB::rollback();
            throw $e;
        }

        return redirect('/menu/List');
    }
}
