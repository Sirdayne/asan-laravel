<?php

use Illuminate\Database\Seeder;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->insert([
            [
                'title' => 'ПАЭЛЬЯ С ОВОЩАМИ',
                'image' => 'paelja',
                'product' => '1',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'УЗБЕКСКИЙ ПЛОВ',
                'image' => 'plov',
                'product' => '1',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'ЗАПЕКАНКА ИЗ МАКАРОН',
                'image' => 'zapekanka',
                'product' => '2',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'СПАГЕТТИ С КУРИЦЕЙ',
                'image' => 'spagetti',
                'product' => '3',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'ГРЕЧНЕВЫЙ СУП',
                'image' => 'sup',
                'product' => '4',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'ТОРТ МЕДОВИК',
                'image' => 'medovik',
                'product' => '5',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'ПИРОГ СО СГУЩЕНКОЙ',
                'image' => 'pirog',
                'product' => '6',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'ГРЕЧКА ПО-КУПЕЧЕСКИ',
                'image' => 'grechka',
                'product' => '4',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'ИТАЛЬЯНСКИЙ САЛАТ С МАКАРОНАМИ',
                'image' => 'salat',
                'product' => '2',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'АМЕРИКАНСКИЕ ПАНКЕЙКИ',
                'image' => 'pankeiki',
                'product' => '7',
                'created_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
