<?php

use Illuminate\Database\Seeder;

use App\Main;

class MainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Main::create([
            'name' => 'top',
            'image' => 'images/top.jpg',
        ]);
        Main::create([
            'name' => 'bottom',
            'image' => 'images/bottom.jpg',
        ]);
    }
}
