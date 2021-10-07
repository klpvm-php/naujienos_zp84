<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class RubrikaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rubrikas')->insert([
            'pavadinimas' => "Transportas",
            'aprasymas' => "Naujienos apie transportą.",
            'nuoroda' => "transportas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('rubrikas')->insert([
            'pavadinimas' => "Politika",
            'aprasymas' => "Politikos naujienos iš Lietuvos ir pasaulio.",
            'nuoroda' => "politika",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('rubrikas')->insert([
            'pavadinimas' => "Orai",
            'aprasymas' => "Informacija apie orus.",
            'nuoroda' => "orai",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('rubrikas')->insert([
            'pavadinimas' => "Ekonomika",
            'aprasymas' => "Ekonomikos naujienos.",
            'nuoroda' => "ekonomika",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('rubrikas')->insert([
            'pavadinimas' => "Žemės ūkis",
            'aprasymas' => "Naujienos apie žemės ūkį.",
            'nuoroda' => "zemes_ukis",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
