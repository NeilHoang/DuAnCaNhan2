<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = new \App\Categories();
        $categories->id = 1;
        $categories->name_category = "OPAS";
        $categories->save();

        $categories = new \App\Categories();
        $categories->id = 2;
        $categories->name_category = "ASDF";
        $categories->save();

        $categories = new \App\Categories();
        $categories->id = 3;
        $categories->name_category = "DASW";
        $categories->save();
    }
}
