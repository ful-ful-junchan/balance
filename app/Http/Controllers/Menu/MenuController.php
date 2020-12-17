<?php

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\AppController;
use Illuminate\Http\Request;
use App\Models\Menu\MenuModel;

class MenuController extends AppController
{
    private $_menuModel;

    /**
     * メニューモデルを取得
     */
    private function _getModel()
    {
        if (!$this->_menuModel) {
            $this->_menuModel = new MenuModel();
        }
    }

    /**
     * Get
     */
    public function index()
    {
        // 現在のメニュー一覧を取得
        $this->_setResponse('menuList', $this->_menuModel->getMenuList());

        //
    }
}
