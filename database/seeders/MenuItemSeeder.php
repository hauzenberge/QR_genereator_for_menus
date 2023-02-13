<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\MenuITem;

class MenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'menu_type_id' => 2,
                'name' => 'Борщ + сало',
                'price' => '70 грн',
            ],
            [
                'menu_type_id' => 2,
                'name' => 'Млинці з начинкою',
                'price' => '3 шт. 90 грн',
            ],

            [
                'menu_type_id' => 1,
                'name' => 'Кава',
                'price'  => '30 грн',
            ],
            [
                'menu_type_id' => 1,
                'name'  => 'Чай',
                'price' => 'від 45 грн',
            ],
            [
                'menu_type_id' => 1,
                'name' => 'Лимнад',
                'price' => '60/75',
            ],
            [
                'menu_type_id' => 1,
                'name' => 'Мохіто',
                'price' => '75/90',
            ],
            [
                'menu_type_id' => 1,
                'name' => 'Мол. Коктель',
                'price' => '65/75',
            ],
            [
                'menu_type_id' => 1,
                'name' => 'Лате Айс',
                'price' => '75/90',
            ],
            [
                'menu_type_id' => 1,
                'name' => 'Фрапе',
                'price' => '75/90',
            ],
            [
                'menu_type_id' => 1,
                'name' => 'Молочний Коктель',
                'price' => '900/300 65/75',
            ],
            [
                'menu_type_id' => 1,
                'name' => 'Заварний Чай',
                'price' => 'від 45 грн',
            ],
        ];

        MenuITem::insert($items);
    }
}
