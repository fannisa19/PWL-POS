<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run()
    {
        DB::table('m_kategori')->insert([
            ['nama_kategori' => 'Elektronik'],
            ['nama_kategori' => 'Fashion'],
            ['nama_kategori' => 'Buku'],
            ['nama_kategori' => 'Peralatan Rumah Tangga'],
            ['nama_kategori' => 'Makanan & Minuman'],
        ]);
    }
}


