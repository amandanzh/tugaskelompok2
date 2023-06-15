<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;

    public function catalog()
    {
        return $this->belongsTo(Catalog::class, 'katalog_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
