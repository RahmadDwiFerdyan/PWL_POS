<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['detail_id' => 1, 'penjualan_id' => 1, 'barang_id' => 1, 'harga' => 5700, 'jumlah' => 2],
            ['detail_id' => 2, 'penjualan_id' => 1, 'barang_id' => 2, 'harga' => 6500, 'jumlah' => 1],
            ['detail_id' => 3, 'penjualan_id' => 2, 'barang_id' => 4, 'harga' => 2500, 'jumlah' => 3],
            ['detail_id' => 4, 'penjualan_id' => 2, 'barang_id' => 5, 'harga' => 3000, 'jumlah' => 2],
            ['detail_id' => 5, 'penjualan_id' => 3, 'barang_id' => 6, 'harga' => 8000, 'jumlah' => 5],
            ['detail_id' => 6, 'penjualan_id' => 3, 'barang_id' => 7, 'harga' => 20000, 'jumlah' => 1],
            ['detail_id' => 7, 'penjualan_id' => 4, 'barang_id' => 8, 'harga' => 29000, 'jumlah' => 2],
            ['detail_id' => 8, 'penjualan_id' => 4, 'barang_id' => 9, 'harga' => 33000, 'jumlah' => 1],
            ['detail_id' => 9, 'penjualan_id' => 5, 'barang_id' => 10, 'harga' => 6000, 'jumlah' => 4],
            ['detail_id' => 10, 'penjualan_id' => 5, 'barang_id' => 3, 'harga' => 4500, 'jumlah' => 3],
            ['detail_id' => 11, 'penjualan_id' => 6, 'barang_id' => 1, 'harga' => 5700, 'jumlah' => 2],
            ['detail_id' => 12, 'penjualan_id' => 6, 'barang_id' => 4, 'harga' => 2500, 'jumlah' => 5],
            ['detail_id' => 13, 'penjualan_id' => 7, 'barang_id' => 2, 'harga' => 6500, 'jumlah' => 4],
            ['detail_id' => 14, 'penjualan_id' => 7, 'barang_id' => 6, 'harga' => 8000, 'jumlah' => 1],
            ['detail_id' => 15, 'penjualan_id' => 8, 'barang_id' => 8, 'harga' => 29000, 'jumlah' => 2],
            ['detail_id' => 16, 'penjualan_id' => 8, 'barang_id' => 10, 'harga' => 6000, 'jumlah' => 3],
            ['detail_id' => 17, 'penjualan_id' => 9, 'barang_id' => 5, 'harga' => 3000, 'jumlah' => 6],
            ['detail_id' => 18, 'penjualan_id' => 9, 'barang_id' => 3, 'harga' => 4500, 'jumlah' => 2],
            ['detail_id' => 19, 'penjualan_id' => 10, 'barang_id' => 9, 'harga' => 33000, 'jumlah' => 3],
            ['detail_id' => 20, 'penjualan_id' => 10, 'barang_id' => 7, 'harga' => 20000, 'jumlah' => 2],
        ];
        DB::table('t_penjualan_detail')->insert($data);
    }
}
