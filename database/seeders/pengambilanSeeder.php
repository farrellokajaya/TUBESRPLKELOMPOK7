<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pengambilanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pengambilan')->insert([
            'nama' => 'POLRESTABES Bandung',
            'alamat' => 'Jl. Merdeka No.18-21',
            'kota' => 'Bandung',
            'hours' => '8:00am-5:00pm',
            'latitude' => 107.610744,
            'longitude' => -6.914005,
        ]);

        DB::table('pengambilan')->insert([
            'nama' => 'Satpas SIM Daan Mogot',
            'alamat' => 'Jl.Daan Mogot KM. 11 No.3',
            'kota' => 'Jakarta',
            'hours' => '8:00am-2:00pm',
            'latitude' => 106.757775,
            'longitude' => -6.152969,
        ]);
    }
}
