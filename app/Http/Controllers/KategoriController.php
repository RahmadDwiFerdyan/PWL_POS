<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;

class KategoriController extends Controller
{
    public function index()
    {
        // $data = [
        //     'kategori_kode' => 'SNK',
        //     'kategori_nama' => 'Snack/ Makanan',
        //     'created_at' => now()
        // ];
        // DB::table('m_kategori') -> insert($data);
        // return 'Insert data baru berhasil';

        // $row = DB::table('m_kategori')
        // ->where('kategori_kode', 'SNK')
        // ->update(['kategori_nama' => 'Camilan']);
        // return 'Update daat berhasil. Jumlah data yang ditambahkan: ' . $row . ' baris';

        // $row = DB::table('m_kategori')
        //     ->where('kategori_kode', 'SNK')
        //     ->delete();
        //     return 'Delete data berhasil. Jumlah data yang dihapus: ' . $row . ' baris';

        $data = DB::table('m_kategori')
                ->get();
        return view('kategori', ['data' => $data]);
    }
}
