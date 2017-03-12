<?php

use Illuminate\Database\Seeder;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients')->insert([
            [
                'recipe_id' => '1',
                'body' => 'Длиннозерновой рис (2 стакана)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '1',
                'body' => 'Луковица',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '1',
                'body' => 'Чеснок (3 дольки)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '1',
                'body' => 'Стручковая фасоль (150 г)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '1',
                'body' => 'Перец и соль',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '1',
                'body' => 'Сладкий перец (2 шт)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '1',
                'body' => 'Помидор (4 шт)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '1',
                'body' => 'Шафран',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '1',
                'body' => 'Куриный бульон (700 мл)',
                'created_at' => date('Y-m-d H:i:s')
            ],

            [
                'recipe_id' => '2',
                'body' => 'Рис (1 кг)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '2',
                'body' => 'Баранина (1 кг)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '2',
                'body' => 'Морковь (1 кг)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '2',
                'body' => 'Подсолнечное масло, нерафинированное (300-400 мл)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '2',
                'body' => 'Луковица (6 шт)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '2',
                'body' => 'Чеснок (3 шт)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '2',
                'body' => 'Стручок острого перца',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '2',
                'body' => 'Специи для плова (½ стакана)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '2',
                'body' => 'Соль (6 ч.л.)',
                'created_at' => date('Y-m-d H:i:s')
            ],
           

            [
                'recipe_id' => '3',
                'body' => 'Макароны-трубочки (500 г)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '3',
                'body' => 'Луковица',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '3',
                'body' => 'Фарш (500 г)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '3',
                'body' => 'Томатный соус, 500 мл (2 шт)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '3',
                'body' => 'Сметана (200 г)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '3',
                'body' => 'Тертый сыр (2 стакана)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '3',
                'body' => 'Тертый сыр Пармезан (2 ст.л.)',
                'created_at' => date('Y-m-d H:i:s')
            ],

            [
                'recipe_id' => '4',
                'body' => 'Куриная грудка (1 шт)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '4',
                'body' => 'Спагетти (400 г)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '4',
                'body' => 'Сливки (200 мл)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '4',
                'body' => 'Луковица',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '4',
                'body' => 'Масло сливочное (20 г)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '4',
                'body' => 'Соль и специи (по вкусу)',
                'created_at' => date('Y-m-d H:i:s')
            ],

            [
                'recipe_id' => '5',
                'body' => 'Куриная грудка (500 г)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '5',
                'body' => 'Луковица (2 шт)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '5',
                'body' => 'Морковь (3 шт)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '5',
                'body' => 'Картофель (4 шт)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '5',
                'body' => 'Помидоры (5 шт)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '5',
                'body' => 'Гречневая крупа (1 стакан)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '5',
                'body' => 'Вода (2 л)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '5',
                'body' => 'Растительное масло (2 ст.л.)',
                'created_at' => date('Y-m-d H:i:s')
            ],

            [
                'recipe_id' => '6',
                'body' => 'Мед (2 ст.л.)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '6',
                'body' => 'Яйцо куриное (2 шт)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '6',
                'body' => 'Разрыхлитель (2 ч.л.)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '6',
                'body' => 'Сахар (1 стакан)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '6',
                'body' => 'Сливочное масло (425 г)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '6',
                'body' => 'Пшеничная мука (3,5 стакана)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '6',
                'body' => 'Грецкие орехи',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '6',
                'body' => 'Сгущенное вареное молоко (1,5 банки)',
                'created_at' => date('Y-m-d H:i:s')
            ],

            [
                'recipe_id' => '7',
                'body' => 'Сливочное масло (80 г)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '7',
                'body' => 'Печенье “Юбилейное” (300 г)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '7',
                'body' => 'Яичный желток (3 шт)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '7',
                'body' => 'Сгущенное молоко (400 мл)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '7',
                'body' => 'Лимоны (½ шт)',
                'created_at' => date('Y-m-d H:i:s')
            ],

            [
                'recipe_id' => '8',
                'body' => 'Лук (1 шт)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '8',
                'body' => 'Мясной фарш (300 г)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '8',
                'body' => 'Чеснок (2 зубчика)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '8',
                'body' => 'Морковь (100 г)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '8',
                'body' => 'Растительное масло (3 ст.л.)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '8',
                'body' => 'Гречневая крупа (150 г)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '8',
                'body' => 'Томатная паста (2 ст.л.)',
                'created_at' => date('Y-m-d H:i:s')
            ],

            [
                'recipe_id' => '9',
                'body' => 'Макароны (100 г)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '9',
                'body' => 'Ветчина (200 г)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '9',
                'body' => 'Соленые огурцы (1 шт)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '9',
                'body' => 'Помидоры (2 шт)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '9',
                'body' => 'Сыр (100 г)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '9',
                'body' => 'Укроп (1 пучок)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '9',
                'body' => 'Яйцо куриное (2 шт)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '9',
                'body' => 'Майонез (по вкусу)',
                'created_at' => date('Y-m-d H:i:s')
            ],

            [
                'recipe_id' => '10',
                'body' => 'Пшеничная мука (240 г)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '10',
                'body' => 'Молоко (220 мл)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '10',
                'body' => 'Сахар (2 ст.л.)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '10',
                'body' => 'Яйцо куриное (4 шт)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '10',
                'body' => 'Соль',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '10',
                'body' => 'Гашеная сода (0,2 ст.л.)',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '10',
                'body' => 'Молотая корица (по вкусу)',
                'created_at' => date('Y-m-d H:i:s')
            ],

            
        ]);
    }
}
