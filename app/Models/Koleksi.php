<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koleksi extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
        'created_at',
    ];

    const UPDATED_AT = null;

    /**
     * Get the user that owns the Koleksi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'uuid');
    }

    /**
     * The roles that belong to the Koleksi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(Resep::class, 'koleksi_reseps', 'koleksi_id', 'resep_id');
    }
}
