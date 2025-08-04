<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('productos')->insert([
            [
                'nombre_producto' => 'Televisor 50 pulgadas',
                'precio' => '3500',
                'marca_id' => 1, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_producto' => 'Refrigerador 2 puertas',
                'precio' => '4200',
                'marca_id' => 2, 
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
