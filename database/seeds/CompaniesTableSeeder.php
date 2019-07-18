<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => Str::random(10),
            'phone' => '01-234-5678',
        ]);
        DB::table('companies')->insert([
            'name' => Str::random(10),
            'phone' => '01-234-5678',
        ]);
    }
}
