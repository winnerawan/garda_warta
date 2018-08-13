<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Category::insert([

            [
                'type_id' => 2,
                'name' => 'Hobi'
            ],

            [
                'type_id' => 2,
                'name' => 'Tunjung Budaya'
            ],

            [
                'type_id' => 2,
                'name' => 'Bumi Santri'
            ],

            [
                'type_id' => 2,
                'name' => 'Laka'
            ]
        ]);
    }
}
