<?php

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
         $this->call(MAUsersTableSeeder::class);
        $this->call(MAPostsTableSeeder::class);
    }
}
