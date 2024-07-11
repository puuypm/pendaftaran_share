<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      //
      DB::table('jurusans')->insert([[
        'nama_jurusan' => 'Operator Komputer',
        'created_at' => now()
    ],[
        'nama_jurusan' => 'Bahasa Inggris',
        'created_at' => now()
    ],[
        'nama_jurusan' => 'Desain Grafis',
        'created_at' => now()
    ],[
        'nama_jurusan' => 'Tata Boga',
        'created_at' => now()
    ],[
        'nama_jurusan' => 'Tata Busana',
        'created_at' => now()
    ],[
        'nama_jurusan' => 'Tata Graha',
        'created_at' => now()
    ],[
        'nama_jurusan' => 'Teknik Pendingin',
        'created_at' => now()
    ],[
        'nama_jurusan' => 'Teknik Komputer',
        'created_at' => now()
    ],[
        'nama_jurusan' => 'Otomotif Sepeda Motor',
        'created_at' => now()
    ],[
        'nama_jurusan' => 'Jaringan Komputer',
        'created_at' => now()
    ],[
        'nama_jurusan' => 'Barista',
        'created_at' => now()
    ],[
        'nama_jurusan' => 'Bahasa Korea',
        'created_at' => now()
    ],[
        'nama_jurusan' => 'Make Up Artist',
        'created_at' => now()
    ],[
        'nama_jurusan' => 'Video Editor',
        'created_at' => now()
    ],[
        'nama_jurusan' => 'Content Creator',
        'created_at' => now()
    ],[
        'nama_jurusan' => 'Web Programming',
        'created_at' => now()
    ]]);
    }
}
