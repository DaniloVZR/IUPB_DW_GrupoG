<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoProyectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
    
    DB::table('tipo__proyectos')->insert([
        [
            'tipo_proyecto' => 'PA',
            'created_at' => $now,
            'updated_at' => $now
        ],
        [
            'tipo_proyecto' => 'PIA',
            'created_at' => $now,
            'updated_at' => $now
        ],
        [
            'tipo_proyecto' => 'PEA',
            'created_at' => $now,
            'updated_at' => $now
        ]
    ]);
    }
}
