<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            ['supplier_id' => 1, 'supplier_kode' => "SUP001", 'supplier_nama' => 'PT. Maju Mundur', 'supplier_alamat' => 'Jl. Jakarta No.11, Malang', 'supplier_kontak' => '0812-9999-1212'],
            ['supplier_id' => 2, 'supplier_kode' => "SUP002", 'supplier_nama' => 'PT. Lempar Lembing', 'supplier_alamat' => 'Jl. Angker Jaya No. 20C, Jakarta', 'supplier_kontak' => '0811-2212-2212'],
            ['supplier_id' => 3, 'supplier_kode' => "SUP003", 'supplier_nama' => 'CV. Wong Liyo', 'supplier_alamat' => 'Jl. Keadilan Sosial No.123, Surabaya', 'supplier_kontak' => '0810-87870-8989'],
            ['supplier_id' => 4, 'supplier_kode' => "SUP004", 'supplier_nama' => 'PT. Sumur Makmur', 'supplier_alamat' => 'Jl. Pithecantropus No.33-D, Solo', 'supplier_kontak' => '0812-3456-112']
        ];
        DB::table('m_supplier')->insert($data);
    }
}
