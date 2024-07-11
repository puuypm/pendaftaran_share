<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GelombangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('gelombangs')->insert([[
            'nama_gelombang' => 'Gelombang 1',
            'aktif' => 0,
            'created_at' => now()
        ],[
            'nama_gelombang' => 'Gelombang 2',
            'aktif' => 0,
            'created_at' => now()
        ],[
            'nama_gelombang' => 'Gelombang 3',
            'aktif' => 0,
            'created_at' => now()
        ]
        
        ]);
    }
}
