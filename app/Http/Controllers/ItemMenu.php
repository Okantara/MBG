<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Kategori;

class ItemMenu extends Controller
{
    // TAMPILKAN DATA
    public function index()
    {
        $kategori = Kategori::with('items')->get();

        return view('Data_Menu', compact('kategori'));
    }

    // TAMBAH ITEM
    public function store(Request $request)
{
    $request->validate([
        'kategori_id' => 'required|exists:kategori,id',
        'nama_item' => 'required|string|max:255',
    ]);

    Item::create([
        'kategori_id' => $request->kategori_id,
        'nama_item' => $request->nama_item,
    ]);

    return redirect()->back()->with('success', 'Item berhasil ditambahkan');
}

    // HAPUS ITEM
    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();

        return redirect()->back()->with('success', 'Item berhasil dihapus');
    }
}