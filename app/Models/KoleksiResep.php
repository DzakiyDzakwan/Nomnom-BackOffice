<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KoleksiResep extends Model
{
    use HasFactory;

    protected $guarded = [
        'koleksi_id',
        'resep_id',
        'added_at'
    ];

    const CREATED_AT = 'added_at';
    const UPDATED_AT = null;
}
