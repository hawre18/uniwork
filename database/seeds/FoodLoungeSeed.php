<?php

use Illuminate\Database\Seeder;

class FoodLoungeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\FoodLounge::class, 50)->create();
    }
}
