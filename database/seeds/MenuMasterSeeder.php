<?php

use Illuminate\Database\Seeder;
use App\Models\Menu\MenuModel;

class MenuMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu_master')->truncate();

        $datas = [
            ['menu_master_id' => '100', 'menu_type' => MenuModel::MENU_TYPE_PARENT, 'parent_menu_master_id' => 0, 'menu_title' => 'ホーム', 'url' => '/home', 'icon' => 'design_app', 'sort' => '10000'],
            ['menu_master_id' => '200', 'menu_type' => MenuModel::MENU_TYPE_PARENT, 'parent_menu_master_id' => 0, 'menu_title' => 'Icons', 'url' => '/bootstrap/icons', 'icon' => 'education_atom', 'sort' => '20000'],
            ['menu_master_id' => '300', 'menu_type' => MenuModel::MENU_TYPE_PARENT, 'parent_menu_master_id' => 0, 'menu_title' => 'Maps', 'url' => '/bootstrap/map', 'icon' => 'location_map-big', 'sort' => '30000'],
            ['menu_master_id' => '400', 'menu_type' => MenuModel::MENU_TYPE_PARENT, 'parent_menu_master_id' => 0, 'menu_title' => 'Notifications', 'url' => '/bootstrap/notifications', 'icon' => 'ui-1_bell-53', 'sort' => '40000'],
            ['menu_master_id' => '500', 'menu_type' => MenuModel::MENU_TYPE_PARENT, 'parent_menu_master_id' => 0, 'menu_title' => 'User Profile', 'url' => '/bootstrap/user', 'icon' => 'users_single-02', 'sort' => '50000'],
            ['menu_master_id' => '600', 'menu_type' => MenuModel::MENU_TYPE_PARENT, 'parent_menu_master_id' => 0, 'menu_title' => 'Table List', 'url' => '/bootstrap/tables', 'icon' => 'design_bullet-list-67', 'sort' => '60000'],
            ['menu_master_id' => '700', 'menu_type' => MenuModel::MENU_TYPE_PARENT, 'parent_menu_master_id' => 0, 'menu_title' => 'Typography', 'url' => '/bootstrap/typography', 'icon' => 'text_caps-small', 'sort' => '70000'],
        ];
        foreach($datas as $data) {
            DB::table('menu_master')->insert($data);
        }
    }
}
