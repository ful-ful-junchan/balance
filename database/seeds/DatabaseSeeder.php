<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserAccountSeeder::class);
        $this->call(MenuMasterSeeder::class);
        $this->call(IconMasterSeeder::class);
    }
}
