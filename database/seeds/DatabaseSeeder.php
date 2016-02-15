<?php

use CodePress\CodeCategory\Entities\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class, 5)->create();
        // $this->call(UserTableSeeder::class);
    }
}
