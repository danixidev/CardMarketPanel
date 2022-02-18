<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('collections')->insert([
			'name' => 'Collection 1',
			'symbol' => 'collection1.png',
			'release_date' => '2021-01-05',
        ]);
        DB::table('collections')->insert([
			'name' => 'Collection 2',
			'symbol' => 'collection2.png',
			'release_date' => '2021-07-13',
        ]);
    }
}
