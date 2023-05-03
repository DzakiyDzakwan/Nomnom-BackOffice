<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tahapan extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public $timestamps = false;

    /**
     * Get the recipes that owns the Tahapan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function recipes()
    {
        return $this->belongsTo(Resep::class, 'resep_id', 'id');
    }
}
