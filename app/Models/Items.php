<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $table = 'item';

    protected $fillable = [
        'kategori_id',
        'nama_item',
    ];

    // Relasi ke Kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    // Relasi ke Menu melalui tabel pivot menu_detail
    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'menu_detail');
    }
}
