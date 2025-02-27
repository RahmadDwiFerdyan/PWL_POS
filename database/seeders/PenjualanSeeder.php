<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['penjualan_id' => 1, 'user_id' => 1, 'pembeli' => 'Andi', 'penjualan_kode' => 'TRX001', 'penjualan_tanggal' => '2024-02-25 10:00:00'],
            ['penjualan_id' => 2, 'user_id' => 2, 'pembeli' => 'Budi', 'penjualan_kode' => 'TRX002', 'penjualan_tanggal' => '2024-02-25 11:00:00'],
            ['penjualan_id' => 3, 'user_id' => 1, 'pembeli' => 'Citra', 'penjualan_kode' => 'TRX003', 'penjualan_tanggal' => '2024-02-25 12:00:00'],
            ['penjualan_id' => 4, 'user_id' => 3, 'pembeli' => 'Dina', 'penjualan_kode' => 'TRX004', 'penjualan_tanggal' => '2024-02-25 13:00:00'],
            ['penjualan_id' => 5, 'user_id' => 2, 'pembeli' => 'Eko', 'penjualan_kode' => 'TRX005', 'penjualan_tanggal' => '2024-02-25 14:00:00'],
            ['penjualan_id' => 6, 'user_id' => 1, 'pembeli' => 'Fajar', 'penjualan_kode' => 'TRX006', 'penjualan_tanggal' => '2024-02-25 15:00:00'],
            ['penjualan_id' => 7, 'user_id' => 3, 'pembeli' => 'Gina', 'penjualan_kode' => 'TRX007', 'penjualan_tanggal' => '2024-02-25 16:00:00'],
            ['penjualan_id' => 8, 'user_id' => 2, 'pembeli' => 'Hadi', 'penjualan_kode' => 'TRX008', 'penjualan_tanggal' => '2024-02-25 17:00:00'],
            ['penjualan_id' => 9, 'user_id' => 1, 'pembeli' => 'Indra', 'penjualan_kode' => 'TRX009', 'penjualan_tanggal' => '2024-02-25 18:00:00'],
            ['penjualan_id' => 10, 'user_id' => 3, 'pembeli' => 'Joko', 'penjualan_kode' => 'TRX010', 'penjualan_tanggal' => '2024-02-25 19:00:00'],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
