<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
	        [
	            'name' => 'book1',
	            'author' => 'author1',
                'publisher' => 'publisher1'
	        ],
	        [
	            'name' => 'book2',
	            'author' => 'author2',
                'publisher' => 'publisher2'
	        ],
            [
	            'name' => 'book3',
	            'author' => 'author3',
                'publisher' => 'publisher3'
	        ]
	    ]);
    }
}
