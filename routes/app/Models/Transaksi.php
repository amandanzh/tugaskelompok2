<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    public $table = 'transaksi';
    public $with = ['kategori'];

    public function kategori()
    {
        return $this->belongsTo(kategori::class);
    }
}
