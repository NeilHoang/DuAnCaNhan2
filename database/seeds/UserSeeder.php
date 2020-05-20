<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = new \App\User();
        $users->name = 'Hoàng';
        $users->email = 'hoang@gmail.com';
        $users->image = 'fdsada.jpg';
        $users->password = hash::make('123');
        $users->save();
    }
}
