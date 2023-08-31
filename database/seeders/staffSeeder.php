<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class staffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff')->insert([
            'name'=>'erwiyana',
            'major'=>'RPL',
            'class'=>'XII',
            'paymentDate'=>'2023-07-17',
            'sum'=>'60000'
        ]);
    }
}
