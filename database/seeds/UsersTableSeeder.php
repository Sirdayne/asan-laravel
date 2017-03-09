<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'marketing@as-an.kz',
            'password' => bcrypt('asan123456'),
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
