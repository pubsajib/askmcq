<?php
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder {
    public function run() {
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(GroupsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(SubcategoriesTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
        $this->call(AnswersTableSeeder::class);
        $this->call(DiscussionsTableSeeder::class);
        $this->call(ReportsTableSeeder::class);
    }
}
