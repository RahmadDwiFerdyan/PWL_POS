<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => "SNC001", 'barang_nama' => "Keripik Singkong", 'harga_beli' => 4500, 'harga_jual' => 5700],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => "SNC002", 'barang_nama' => "Biskuit Gandum", 'harga_beli' => 5000, 'harga_jual' => 6500],
            ['barang_id' => 3, 'kategori_id' => 1, 'barang_kode' => "SNC003", 'barang_nama' => "Kerupuk Udang", 'harga_beli' => 2700, 'harga_jual' => 4500],
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => "DRK001", 'barang_nama' => "Air Mineral", 'harga_beli' => 1900, 'harga_jual' => 2500],
            ['barang_id' => 5, 'kategori_id' => 2, 'barang_kode' => "DRK002", 'barang_nama' => "Teh Melati", 'harga_beli' => 2000, 'harga_jual' => 3000],
            ['barang_id' => 6, 'kategori_id' => 3, 'barang_kode' => "VEG001", 'barang_nama' => "Sawi Putih", 'harga_beli' => 6000, 'harga_jual' => 8000],
            ['barang_id' => 7, 'kategori_id' => 3, 'barang_kode' => "VEG002", 'barang_nama' => "Brokoli", 'harga_beli' => 18000, 'harga_jual' => 20000],
            ['barang_id' => 8, 'kategori_id' => 4, 'barang_kode' => "FRT001", 'barang_nama' => "Mangga Manalagi", 'harga_beli' => 24000, 'harga_jual' => 29000],
            ['barang_id' => 9, 'kategori_id' => 4, 'barang_kode' => "FRT002", 'barang_nama' => "Nanas Madu", 'harga_beli' => 28000, 'harga_jual' => 33000],
            ['barang_id' => 10, 'kategori_id' => 5, 'barang_kode' => "MED001", 'barang_nama' => "Paracetamol", 'harga_beli' => 3500, 'harga_jual' => 6000],
        ];
        DB::table('m_barang')->insert($data);
    }
}
