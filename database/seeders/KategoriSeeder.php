<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategori;
use App\Models\Item;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tambah kategori
        $kategori1 = Kategori::create(['nama_kategori' => 'Makanan']);
        $kategori2 = Kategori::create(['nama_kategori' => 'Minuman']);
        $kategori3 = Kategori::create(['nama_kategori' => 'Dessert']);

        // Tambah items untuk kategori 1
        Item::create(['kategori_id' => $kategori1->id, 'nama_item' => 'Nasi Goreng']);
        Item::create(['kategori_id' => $kategori1->id, 'nama_item' => 'Mie Ayam']);
        Item::create(['kategori_id' => $kategori1->id, 'nama_item' => 'Soto Ayam']);

        // Tambah items untuk kategori 2
        Item::create(['kategori_id' => $kategori2->id, 'nama_item' => 'Jus Jeruk']);
        Item::create(['kategori_id' => $kategori2->id, 'nama_item' => 'Air Putih']);
        Item::create(['kategori_id' => $kategori2->id, 'nama_item' => 'Teh Manis']);

        // Tambah items untuk kategori 3
        Item::create(['kategori_id' => $kategori3->id, 'nama_item' => 'Es Krim']);
        Item::create(['kategori_id' => $kategori3->id, 'nama_item' => 'Puding']);
    }
}
