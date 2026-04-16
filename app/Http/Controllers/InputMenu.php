<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Item;
use App\Models\Kategori;
use App\Models\Ompreng;

class InputMenu extends Controller
{
    public function index()
    {
        $menus = Menu::with('items', 'user')->latest()->get();
        $kategori = Kategori::with('items')->get();
        $ompreng = Ompreng::all();

        return view('Input_Menu', compact('menus', 'kategori', 'ompreng'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'catatan' => 'nullable|string',
            'items' => 'required|array'
        ]);

        $menu = Menu::create([
            'user_id' => Auth::id() ?? 1,
            'tanggal' => $request->tanggal,
            'catatan' => $request->catatan,
        ]);

        // Filter out empty values and attach items
        $itemIds = array_filter($request->items);
        if (!empty($itemIds)) {
            $menu->items()->attach($itemIds);
        }

        return redirect()->back()->with('success', 'Menu berhasil disimpan');
    }
}