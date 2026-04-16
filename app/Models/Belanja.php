<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Belanja extends Model
{
    protected $table = 'belanja';
    protected $fillable = [
        'user_id',
        'hari',
        'tanggal',
        'supplier',
        'pengeluaran_belanja',
        'total_belanja',
    ];
    
    public $timestamps = true;
    
    // relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
