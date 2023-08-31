<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'Bulan' => 'Januari',
            'DetailPembayaran' => '60000',
            'tanggalPembayaran' => '2023-5-12',
            'Status' => 'Lunas',
        ]); 
    }
}
