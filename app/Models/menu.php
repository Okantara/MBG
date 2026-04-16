<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
    protected $fillable = ['user_id', 'tanggal', 'catatan'];

    // relasi dengan user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // relasi dengan menu_detail
    public function items()
    {
        return $this->belongsToMany(Item::class, 'menu_detail');
    }
}
