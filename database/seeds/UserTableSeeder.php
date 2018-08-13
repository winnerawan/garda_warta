<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::insert([
            'name' => 'Administrator',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin'),
            'created_at' => \Carbon\Carbon::now('Asia\Jakarta')
        ]);
    }
}
