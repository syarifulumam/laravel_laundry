<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaketLaundrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paket_laundry')->insert(
            [
                'nama_paket' => 'Paket Express',
                'harga'      => 10000,
            ]
        );
        DB::table('paket_laundry')->insert(  
            [
                'nama_paket' => 'Cuci Kering',
                'harga'      => 7000,
            ]
        );
        DB::table('paket_laundry')->insert(
            [
                'nama_paket' => 'Cuci Setrika',
                'harga'      => 8000,
            ]
        );
    }
}
