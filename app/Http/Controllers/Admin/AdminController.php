<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MahasiswaModel;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function data()
    {
        $mahasiswa = DB::table('mahasiswa')->get();

        return view('admin.data', ['mahasiswa' => $mahasiswa]);
        //latest menampilkan id terbaru 
        //paginate menmapilkan sebanyak
        // $mahasiswa = MahasiswaModel::latest()->paginate(10);
        // return view('admin.data',  compact('mahasiswa'));
    }
    public function pendaftaran()
    {
        $mahasiswa = DB::table('mahasiswa')->get();

        return view('admin.pendaftaran', ['mahasiswa' => $mahasiswa]);
    }
    // public function updateStatus(Request $request, $id)
    // {
    //     // Validasi data yang diterima dari permintaan
    //     $request->validate([
    //         'id' => 'required|exists:mahasiswa,id',
    //         'status' => 'required|in: diterima,ditolak,',
    //     ]);

    //     // Perbarui status mahasiswa berdasarkan ID
    //     $affected = DB::table('mahasiswa')
    //         ->where('id', $id)
    //         ->update([
    //             'status' => $request->input('status')
    //         ]);

    //     if ($affected) {
    //         return response()->json(['message' => 'Status mahasiswa berhasil diperbarui'], 200);
    //     } else {
    //         return response()->json(['message' => 'Gagal memperbarui status mahasiswa'], 500);
    //     }
    // }
    public function updateStatus(Request $request)
    {
        // // Validasi data yang diterima dari permintaan
        // $request->validate([
        //     'status' => 'required|in:diterima,ditolak',
        // ]);

        // // Perbarui status mahasiswa berdasarkan ID
        // $affected = DB::table('mahasiswa')
        //     ->where('id', 1)
        //     ->update([
        //         'status' => $request->status
        //     ]);
        //untuk memvalidasi data dari mahasiswa yang telah mendaftar apakah disetujui atau ditolak
        $mahasiswa = MahasiswaModel::where('id', $request->id)->first();
        $mahasiswa->update([
            'status' => $request->status
        ]);
        return redirect()->back();
    }
}
