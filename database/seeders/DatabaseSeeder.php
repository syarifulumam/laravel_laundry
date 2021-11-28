<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        $this->call(PaketLaundrySeeder::class);
        Pelanggan::factory(10)->create();
    }
}
