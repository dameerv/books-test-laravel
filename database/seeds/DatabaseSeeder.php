<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         $this->call(UserSeeder::class);
//         $this->call(AuthorSeeder::class);
        factory(\App\Author::class, 10)->create();
        factory(\App\Book::class, 50)->create();

    }
}
