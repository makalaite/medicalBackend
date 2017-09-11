<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MAUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1, 'email' => 'test@test.ts', 'first_name' => 'Name', 'last_name' => 'Surname', 'role_id' => 1, 'remember_token' => 'asadgfjhjkhg', 'position' => 'Demo_position',
                'password' => Hash::make('testas')]
        ];
        DB::table('ma_users')->insert($data);
    }
}
