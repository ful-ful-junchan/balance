<?php

use Illuminate\Database\Seeder;

class UserAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_account')->truncate();

        $datas = [
            ['name' => 'jhorita', 'email' => 'jhorita@gmail.com', 'password' => '$2y$10$CHMra9Pa1YOlaSn0cqBEhOHPBbJvVfX9I.g8ni4QyYGsyZEYAakNe', 'role' => '0'],
        ];
        foreach($datas as $data) {
            DB::table('user_account')->insert($data);
        }
    }
}
