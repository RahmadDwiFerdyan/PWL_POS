<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class ProfileController extends Controller
{
    public function index()
    {

        $activeMenu = 'dashboard';

        return view(
            'welcome',
            ['activeMenu' => $activeMenu]
        );
    }

    // public function show_profile()
    // {
    //     $user = Auth::user(); // ambil user yang lagi login
    //     return view('welcome', compact('user')); // kirim data user ke view profile
    // }
    public function update_photo(Request $request)
    {
        $user = Auth::user();
        /** @var \App\Models\User $user **/

        if ($request->hasFile('photo')) {
            // Validasi file foto
            $validator = Validator::make($request->all(), [
                'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            if ($validator->fails()) {
                // Jika validasi gagal, ambil pesan kesalahan
                $errors = $validator->errors();
                return redirect()->back()->withErrors($errors)->withInput();
            }

            // Hapus foto lama jika ada
            if ($user->photo && Storage::disk('public')->exists('photos/' . $user->photo)) {
                Storage::disk('public')->delete('photos/' . $user->photo);
            }

            // Simpan foto baru
            $photoName = time() . '.' . $request->photo->extension();
            $request->photo->storeAs('photos', $photoName, 'public');

            // Perbarui nama file foto di database
            $user->photo = $photoName;
            $user->save();

            return redirect()->back()->with('success', 'Foto profil berhasil diperbarui.');
        }

        return redirect()->back()->with('warning', 'Tidak ada foto yang diunggah.');
    }
}
