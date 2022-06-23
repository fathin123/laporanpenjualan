<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DuaPuluhSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dua_puluh = [
            ['menu' => 'Makanan',],
            ['menu' => 'Minuman',],
        ];

        DB::table('dua_puluhs')->insert($dua_puluh);
    }
}
