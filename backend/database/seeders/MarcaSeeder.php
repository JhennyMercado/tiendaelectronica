<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // REGISTROS A LA TABLA MARCAS
        DB::table('marcas')->insert([
            [
                'nombre' => 'Samsung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'LG',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
