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
            /**
             * メインメニュー
             */
            ['menu_master_id' => '100', 'menu_type' => MenuModel::MENU_TYPE_PARENT, 'parent_menu_master_id' => 0, 'menu_title' => 'ホーム', 'url' => '/home', 'icon' => 'design_app', 'sort' => '100'],
            ['menu_master_id' => '200', 'menu_type' => MenuModel::MENU_TYPE_PARENT, 'parent_menu_master_id' => 0, 'menu_title' => 'Icons', 'url' => '/bootstrap/icons', 'icon' => 'education_atom', 'sort' => '200'],
            ['menu_master_id' => '300', 'menu_type' => MenuModel::MENU_TYPE_PARENT, 'parent_menu_master_id' => 0, 'menu_title' => 'Maps', 'url' => '/bootstrap/map', 'icon' => 'location_map-big', 'sort' => '300'],
            ['menu_master_id' => '400', 'menu_type' => MenuModel::MENU_TYPE_PARENT, 'parent_menu_master_id' => 0, 'menu_title' => 'Notifications', 'url' => '/bootstrap/notifications', 'icon' => 'ui-1_bell-53', 'sort' => '400'],
            ['menu_master_id' => '500', 'menu_type' => MenuModel::MENU_TYPE_PARENT, 'parent_menu_master_id' => 0, 'menu_title' => 'User Profile', 'url' => '/bootstrap/user', 'icon' => 'users_single-02', 'sort' => '500'],
            ['menu_master_id' => '600', 'menu_type' => MenuModel::MENU_TYPE_PARENT, 'parent_menu_master_id' => 0, 'menu_title' => 'Table List', 'url' => '/bootstrap/tables', 'icon' => 'design_bullet-list-67', 'sort' => '600'],
            ['menu_master_id' => '700', 'menu_type' => MenuModel::MENU_TYPE_PARENT, 'parent_menu_master_id' => 0, 'menu_title' => 'Typography', 'url' => '/bootstrap/typography', 'icon' => 'text_caps-small', 'sort' => '700'],

            ['menu_master_id' => '5000', 'menu_type' => MenuModel::MENU_TYPE_PARENT, 'parent_menu_master_id' => 0, 'menu_title' => 'Menu', 'url' => '/menu/MenuList', 'icon' => 'design_bullet-list-67', 'sort' => '5000'],

            /**
             * サブメニュー
             */
            /* メニュー */
            ['menu_master_id' => '5001', 'menu_type' => MenuModel::MENU_TYPE_PARENT, 'parent_menu_master_id' => 5000, 'menu_title' => 'Menu List', 'url' => '/menu/MenuList', 'icon' => '', 'sort' => '5001'],
        ];
        foreach($datas as $data) {
            DB::table('menu_master')->insert($data);
        }
    }
}
