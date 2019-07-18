<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@'.Str::random(10).'.com',
            'active' => true,
            'company_id' => 1,
        ]);
        DB::table('customers')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@'.Str::random(10).'.com',
            'active' => false,
            'company_id' => 2,
        ]);
    }
}
