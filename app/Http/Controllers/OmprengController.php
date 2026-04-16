<?php

namespace App\Http\Controllers;

use App\Models\Ompreng;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OmprengController extends Controller
{
    // Ambil data (dipakai kalau mau halaman khusus)
    public function index()
    {
        $ompreng = Ompreng::with('user')->get();

        return view('kategori.index', compact('ompreng')); 
        // karena 1 halaman dengan kategori
    }

    // Simpan data
    public function store(Request $request)
    {
        $request->validate([
            'nama_pelanggan' => 'required|string|max:255',
            'jumlah' => 'required|integer'
        ]);

        Ompreng::create([
            'user_id' => auth()->id() ?? 1,
            'nama_pelanggan' => $request->nama_pelanggan,
            'jumlah' => $request->jumlah,
        ]);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }

    // Update
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pelanggan' => 'required|string|max:255',
            'jumlah' => 'required|integer'
        ]);

        $ompreng = Ompreng::findOrFail($id);

        $ompreng->update([
            'nama_pelanggan' => $request->nama_pelanggan,
            'jumlah' => $request->jumlah,
        ]);

        return redirect()->back()->with('success', 'Data berhasil diupdate');
    }

    // Hapus
    public function destroy($id)
    {
        $ompreng = Ompreng::findOrFail($id);
        $ompreng->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}