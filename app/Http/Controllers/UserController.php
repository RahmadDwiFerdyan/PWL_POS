<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::where('username', 'manager9')->firstOrFail();
        return view('user', ['data'=>$user]);


        // $user = UserModel::findOrFail(1);
        // return view('user', ['data'=>$user]);

        // $user = UserModel::findOr(
        //     20,
        //     ['username', 'nama'],
        //     function () {
        //         abort(404);
        //     }
        // );
        // return view('user', ['data' => $user]);

    // $user = UserModel::findOr(
    //     1,
        //     ['username', 'nama'],
        //     function () {
        //         abort(404);
        //     }
        // );

        // return view('user', ['data' => $user]);



        // $user = UserModel::firstwhere('level_id', 1);
        // return view('user', ['data' => $user]);

        // $user = UserModel::where('level_id', 1)->first();
        // return view('user', ['data' => $user]);

        // $user = UserModel::find(1);
        // return view('user', ['data' => $user]);

        //Praktikum-1
        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_tiga',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345')
        // ];
        // UserModel::create($data);

        // $user = UserModel::all();
        // return view('user', ['data' => $user]);


        // update data user dengan Eloquent Model
        // $data = [
        //     'nama' => 'Pelanggan Pertama',
        // ];
        // UserModel::where('username', 'customer-1')
        //     ->update($data);


        // $data = [
        //      'username' => 'customer-1',
        //     'nama' => 'Pelanggan',
        //      'password' => Hash::make('12345'),
        //      'level_id' => 4
        //  ];
        // UserModel::insert($data);

        // akses ke model UserModel
        // $user = UserModel::all(); //ambilsemua data dari tabel m_user
        // return view('user', ['data' => $user]);
    }
}
