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
             * 家計簿セクション
             */
            // ホーム
            ['menu_master_id' => '1000', 'section_type' => MenuModel::SECTION_TYPE_BALANCE, 'menu_type' => MenuModel::MENU_TYPE_PARENT, 'parent_menu_master_id' => 0, 'menu_title' => 'ホーム', 'url' => '/home', 'icon' => 'cil-home', 'order' => '1000'],

            // 実績
            ['menu_master_id' => '1100', 'section_type' => MenuModel::SECTION_TYPE_BALANCE, 'menu_type' => MenuModel::MENU_TYPE_PARENT, 'parent_menu_master_id' => 0, 'menu_title' => '実績', 'url' => '', 'icon' => 'cil-pencil', 'order' => '1100'],
            ['menu_master_id' => '1101', 'section_type' => MenuModel::SECTION_TYPE_BALANCE, 'menu_type' => MenuModel::MENU_TYPE_CHILDREN, 'parent_menu_master_id' => 1100, 'menu_title' => '日別口座残高', 'url' => '/results/DailyBalanceResults', 'icon' => 'cil-input', 'order' => '1101'],
            ['menu_master_id' => '1102', 'section_type' => MenuModel::SECTION_TYPE_BALANCE, 'menu_type' => MenuModel::MENU_TYPE_CHILDREN, 'parent_menu_master_id' => 1100, 'menu_title' => '月別実績', 'url' => '/results/MonthlyBalanceResults', 'icon' => 'cil-input', 'order' => '1102'],

            // 口座管理
            ['menu_master_id' => '1200', 'section_type' => MenuModel::SECTION_TYPE_BALANCE, 'menu_type' => MenuModel::MENU_TYPE_PARENT, 'parent_menu_master_id' => 0, 'menu_title' => '口座管理', 'url' => '', 'icon' => 'cil-short-text', 'order' => '1200'],
            ['menu_master_id' => '1201', 'section_type' => MenuModel::SECTION_TYPE_BALANCE, 'menu_type' => MenuModel::MENU_TYPE_CHILDREN, 'parent_menu_master_id' => 1200, 'menu_title' => '口座管理', 'url' => '/bank/PaymentAccountManager', 'icon' => 'cil-browser', 'order' => '1201'],
            ['menu_master_id' => '1202', 'section_type' => MenuModel::SECTION_TYPE_BALANCE, 'menu_type' => MenuModel::MENU_TYPE_CHILDREN, 'parent_menu_master_id' => 1200, 'menu_title' => '銀行口座管理', 'url' => '/bank/BankAccountManager', 'icon' => 'cil-bank', 'order' => '1202'],
            ['menu_master_id' => '1203', 'section_type' => MenuModel::SECTION_TYPE_BALANCE, 'menu_type' => MenuModel::MENU_TYPE_CHILDREN, 'parent_menu_master_id' => 1200, 'menu_title' => '口座振替管理', 'url' => '/bank/AccountTransferManager', 'icon' => 'cil-swap-horizontal', 'order' => '1203'],

            // クレジットカード
            ['menu_master_id' => '1300', 'section_type' => MenuModel::SECTION_TYPE_BALANCE, 'menu_type' => MenuModel::MENU_TYPE_PARENT, 'parent_menu_master_id' => 0, 'menu_title' => 'クレジットカード管理', 'url' => '', 'icon' => 'cil-short-text', 'order' => '1300'],
            ['menu_master_id' => '1301', 'section_type' => MenuModel::SECTION_TYPE_BALANCE, 'menu_type' => MenuModel::MENU_TYPE_CHILDREN, 'parent_menu_master_id' => 1300, 'menu_title' => 'クレジットカード管理', 'url' => '/bank/CreditCardManager', 'icon' => 'cil-credit-card', 'order' => '1301'],
            ['menu_master_id' => '1302', 'section_type' => MenuModel::SECTION_TYPE_BALANCE, 'menu_type' => MenuModel::MENU_TYPE_CHILDREN, 'parent_menu_master_id' => 1300, 'menu_title' => 'カード明細グループ', 'url' => '/bank/CreditCardGroup', 'icon' => 'cil-description', 'order' => '1302'],

            // 予算
            ['menu_master_id' => '1400', 'section_type' => MenuModel::SECTION_TYPE_BALANCE, 'menu_type' => MenuModel::MENU_TYPE_PARENT, 'parent_menu_master_id' => 0, 'menu_title' => '予算管理', 'url' => '', 'icon' => 'cil-control', 'order' => '1400'],
            ['menu_master_id' => '1401', 'section_type' => MenuModel::SECTION_TYPE_BALANCE, 'menu_type' => MenuModel::MENU_TYPE_CHILDREN, 'parent_menu_master_id' => 1400, 'menu_title' => '収支予算管理', 'url' => '/estimate/BalanceDivitionEstimateManager', 'icon' => 'cil-storage', 'order' => '1401'],
            ['menu_master_id' => '1402', 'section_type' => MenuModel::SECTION_TYPE_BALANCE, 'menu_type' => MenuModel::MENU_TYPE_CHILDREN, 'parent_menu_master_id' => 1400, 'menu_title' => '口座振替予算管理', 'url' => '/estimate/AccountTransferEstimateManager', 'icon' => 'cil-storage', 'order' => '1402'],

            // 管理
            ['menu_master_id' => '1500', 'section_type' => MenuModel::SECTION_TYPE_BALANCE, 'menu_type' => MenuModel::MENU_TYPE_PARENT, 'parent_menu_master_id' => 0, 'menu_title' => '家計簿管理', 'url' => '', 'icon' => 'cil-applications', 'order' => '1500'],
            ['menu_master_id' => '1501', 'section_type' => MenuModel::SECTION_TYPE_BALANCE, 'menu_type' => MenuModel::MENU_TYPE_CHILDREN, 'parent_menu_master_id' => 1500, 'menu_title' => '収支項目管理', 'url' => '/balance/BalanceDivitionManager', 'icon' => 'cil-storage', 'order' => '1501'],

            /*
             * Settingセクション
             */
            ['menu_master_id' => '5000', 'section_type' => MenuModel::SECTION_TYPE_SETTINGS, 'menu_type' => MenuModel::MENU_TYPE_PARENT, 'parent_menu_master_id' => 0, 'menu_title' => 'メニュー', 'url' => '', 'icon' => 'cil-menu', 'order' => '5000'],
            // メニュー管理
            ['menu_master_id' => '5001', 'section_type' => MenuModel::SECTION_TYPE_SETTINGS, 'menu_type' => MenuModel::MENU_TYPE_CHILDREN, 'parent_menu_master_id' => 5000, 'menu_title' => 'メニュー一覧', 'url' => '/menu/MenuList', 'icon' => 'cil-menu', 'order' => '5001'],

        ];
        foreach($datas as $data) {
            DB::table('menu_master')->insert($data);
        }
    }
}
