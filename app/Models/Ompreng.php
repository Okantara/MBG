<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ompreng extends Model
{
    protected $table = 'ompreng';
    protected $fillable = [
        'user_id',
        'nama_pelanggan',
        'jumlah',
        
    ];

    // Relasi dengan model User
    public function user()
    {
    return $this->belongsTo(User::class);
    }

    public $timestamps = false;
}
