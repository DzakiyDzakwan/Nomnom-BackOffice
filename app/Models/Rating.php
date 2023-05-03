<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'added_at',
    ];

    const CREATED_AT = 'added_at';
    const UPDATED_AT = null;
}
