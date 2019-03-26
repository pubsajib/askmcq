<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder {
    public function run() {
        factory(App\Category::class, 40)->create();
    }
}
