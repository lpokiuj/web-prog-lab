<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reports')->insert([
	        [
	            'borrowed_by' => 1,
                'borrowed_book' => 1,
                'borrowed_date' => '2022-09-08',
                'duration_days' => 3
	        ],
	        [
	            'borrowed_by' => 2,
                'borrowed_book' => 2,
                'borrowed_date' => '2022-09-09',
                'duration_days' => 4
	        ],
            [
	            'borrowed_by' => 3,
                'borrowed_book' => 3,
                'borrowed_date' => '2022-09-10',
                'duration_days' => 5
	        ],
	    ]);
    }
}
