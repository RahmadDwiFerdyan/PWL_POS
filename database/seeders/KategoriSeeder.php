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
    public function run(): void
    {
        $data=[
            ['kategori_id' => 1, 'kategori_kode' => "SNC", 'kategori_nama' => "Makanan Ringan"],
            ['kategori_id' => 2, 'kategori_kode' => "DRK", 'kategori_nama' => "Minuman"],
            ['kategori_id' => 3, 'kategori_kode' => "VEG", 'kategori_nama' => "Sayuran"],
            ['kategori_id' => 4, 'kategori_kode' => "FRT", 'kategori_nama' => "Buah"],
            ['kategori_id' => 5, 'kategori_kode' => "MED", 'kategori_nama' => "Obat-obatan"],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
