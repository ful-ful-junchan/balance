<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
use App\Models\Menu\MenuModel;

class AppController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Viewレスポンス
     * @var array
     */
    protected $_response = [];

    /**
     * ページテンプレート名
     * @var string
     */
    protected $_templateName = 'home';

    /**
     * ログインが必要か
     * @return boolean
     */
    protected function _isRequireAuthorize()
    {
        return true;
    }

    /**
     * コンストラクタ
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        // ログインチェック
        if ($this->_isRequireAuthorize()) {
            $this->middleware('auth');
        }

        // サイドバーメニュー（一旦ベタ）
        $menuModel = new MenuModel();
        $sidebarList = $menuModel->getSideMenuList();
        $this->_setResponse( 'sidebarList', $sidebarList );
        $this->_setResponse( 'currentSidebar', (isset($sidebarList[ $request->menuId ]) ? $sidebarList[ $request->menuId ] : current( $sidebarList ) ) );
    }

    /**
     * Viewに渡すデータをセット
     * @param mixed $key
     * @param mixed $value
     * @return \App\Http\Controllers\AppController
     */
    protected function _setResponse($key, $value = null)
    {
        $this->_response[ $key ] = $value;
        return $this;
    }

    /**
     * Viewに渡すデータを取得
     * @return array
     */
    protected function _getResponse()
    {
        return $this->_response;
    }

    /**
     * テンプレートを描画する
     * @param string $templateName
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    protected function render($templateName = null)
    {
        $template = !is_null($templateName) ? $templateName : $this->_templateName;
        return view($template, $this->_getResponse());
    }
}
