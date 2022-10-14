<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'user1',
                'address' => 'address1'
            ],
            [
                'name' => 'user2',
                'address' => 'address2'
            ],
            [
                'name' => 'user3',
                'address' => 'address3'
            ],
        ]);
    }
}
