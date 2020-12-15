<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;

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

    protected function __construct(Request $request)
    {
        // ログインチェック
        if ($this->_isRequireAuthorize()) {
            $this->middleware('auth');
        }

        // サイドバーメニュー（一旦ベタ）
        // サイドバーリスト
        $sidebarList = [
            1 => [
                'id' => 1,
                'title' => 'Dashboard',
                'url' => '/bootstrap/home',
                'icon' => 'design_app',
            ],
            2 => [
                'id' => 2,
                'title' => 'Icons',
                'url' => '/bootstrap/icons',
                'icon' => 'education_atom',
            ],
            3 => [
                'id' => 3,
                'title' => 'Maps',
                'url' => '/bootstrap/map',
                'icon' => 'location_map-big',
            ],
            4 => [
                'id' => 4,
                'title' => 'Notifications',
                'url' => '/bootstrap/notifications',
                'icon' => 'ui-1_bell-53',
            ],
            5 => [
                'id' => 5,
                'title' => 'User Profile',
                'url' => '/bootstrap/user',
                'icon' => 'users_single-02',
            ],
            6 => [
                'id' => 6,
                'title' => 'Table List',
                'url' => '/bootstrap/tables',
                'icon' => 'design_bullet-list-67',
            ],
            7 => [
                'id' => 7,
                'title' => 'Typography',
                'url' => '/bootstrap/typography',
                'icon' => 'text_caps-small',
            ],
        ];
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
