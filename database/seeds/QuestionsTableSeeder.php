<?php
use Illuminate\Database\Seeder;
class QuestionsTableSeeder extends Seeder {
    public function run() {
        factory('App\Question', 150)->create();
    }
}