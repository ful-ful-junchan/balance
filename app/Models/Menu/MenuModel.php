<?php

namespace App\Models\Menu;

use Illuminate\Database\Eloquent\Model;

class MenuModel extends Model
{
    /**
     * サイドメニュー一覧を取得
     * @return []
     */
    public function getSideMenuList()
    {
        return [
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
    }
}
