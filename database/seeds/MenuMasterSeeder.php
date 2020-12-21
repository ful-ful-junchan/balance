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
            ['menu_master_id' => '100', 'section_type' => MenuModel::SECTION_TYPE_BALANCE, 'menu_type' => MenuModel::MENU_TYPE_PARENT, 'parent_menu_master_id' => 0, 'menu_title' => 'ホーム', 'url' => '/home', 'icon' => 'design_app', 'order' => '100'],
            ['menu_master_id' => '200', 'section_type' => MenuModel::SECTION_TYPE_BALANCE, 'menu_type' => MenuModel::MENU_TYPE_PARENT, 'parent_menu_master_id' => 0, 'menu_title' => 'Icons', 'url' => '/bootstrap/icons', 'icon' => 'education_atom', 'order' => '200'],
            ['menu_master_id' => '300', 'section_type' => MenuModel::SECTION_TYPE_BALANCE, 'menu_type' => MenuModel::MENU_TYPE_PARENT, 'parent_menu_master_id' => 0, 'menu_title' => 'Maps', 'url' => '/bootstrap/map', 'icon' => 'location_map-big', 'order' => '300'],
            ['menu_master_id' => '400', 'section_type' => MenuModel::SECTION_TYPE_BALANCE, 'menu_type' => MenuModel::MENU_TYPE_PARENT, 'parent_menu_master_id' => 0, 'menu_title' => 'Notifications', 'url' => '/bootstrap/notifications', 'icon' => 'ui-1_bell-53', 'order' => '400'],
            ['menu_master_id' => '500', 'section_type' => MenuModel::SECTION_TYPE_BALANCE, 'menu_type' => MenuModel::MENU_TYPE_PARENT, 'parent_menu_master_id' => 0, 'menu_title' => 'User Profile', 'url' => '/bootstrap/user', 'icon' => 'users_single-02', 'order' => '500'],
            ['menu_master_id' => '600', 'section_type' => MenuModel::SECTION_TYPE_SETTINGS, 'menu_type' => MenuModel::MENU_TYPE_PARENT, 'parent_menu_master_id' => 0, 'menu_title' => 'Table List', 'url' => '/bootstrap/tables', 'icon' => 'design_bullet-list-67', 'order' => '600'],
            ['menu_master_id' => '700', 'section_type' => MenuModel::SECTION_TYPE_ADMIN, 'menu_type' => MenuModel::MENU_TYPE_PARENT, 'parent_menu_master_id' => 0, 'menu_title' => 'Typography', 'url' => '/bootstrap/typography', 'icon' => 'text_caps-small', 'order' => '700'],

            ['menu_master_id' => '5000', 'section_type' => MenuModel::SECTION_TYPE_BALANCE, 'menu_type' => MenuModel::MENU_TYPE_PARENT, 'parent_menu_master_id' => 0, 'menu_title' => 'Menu', 'url' => '/menu/MenuList', 'icon' => 'design_bullet-list-67', 'order' => '5000'],

            /**
             * サブメニュー
             */
            /* メニュー */
            ['menu_master_id' => '5001', 'section_type' => MenuModel::SECTION_TYPE_BALANCE, 'menu_type' => MenuModel::MENU_TYPE_CHILDREN, 'parent_menu_master_id' => 5000, 'menu_title' => 'Menu List', 'url' => '/menu/MenuList', 'icon' => '', 'order' => '5001'],
        ];
        foreach($datas as $data) {
            DB::table('menu_master')->insert($data);
        }
    }
}
