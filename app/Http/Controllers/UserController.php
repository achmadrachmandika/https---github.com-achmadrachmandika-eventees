<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
       public function index()
    {
        // Mengambil semua data pengguna
        $users = User::all();
        return view('user.index', compact('users'));
    }

      public function destroy($id)
    {
        // Mencari pengguna berdasarkan ID dan menghapusnya
        $user = User::findOrFail($id);
        $user->delete();

        // Redirect kembali ke halaman pengguna dengan pesan sukses
        return redirect()->route('user.index')->with('success', 'Peserta berhasil dihapus.');
    }
}
