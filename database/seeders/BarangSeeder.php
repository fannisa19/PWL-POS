<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_barang')->insert([
            ['nama_barang' => 'Laptop', 'kategori_id' => 1],
            ['nama_barang' => 'Smartphone', 'kategori_id' => 1],
            ['nama_barang' => 'Kemeja', 'kategori_id' => 2],
            ['nama_barang' => 'Celana', 'kategori_id' => 2],
            ['nama_barang' => 'Novel', 'kategori_id' => 3],
            ['nama_barang' => 'Komik', 'kategori_id' => 3],
            ['nama_barang' => 'Blender', 'kategori_id' => 4],
            ['nama_barang' => 'Setrika', 'kategori_id' => 4],
            ['nama_barang' => 'Mie Instan', 'kategori_id' => 5],
            ['nama_barang' => 'Susu', 'kategori_id' => 5],
        ]);
    }
}
