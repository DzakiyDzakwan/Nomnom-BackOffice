<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    use HasFactory;
    
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    /**
     * Get all of the comments for the Resep
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function tahapan()
    {
        return $this->hasMany(Tahapan::class, 'resep_id', 'id');
    }

    public function ingredients()
    {
        return $this->hasMany(Bahan::class, 'resep_id', 'id');
    }

    /**
     * The roles that belong to the Resep
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function comments()
    {
        return $this->belongsToMany(User::class, 'komentars', 'resep_id', 'user_id');
    }

    public function ratings()
    {
        return $this->belongsToMany(User::class, 'ratings', 'resep_id', 'user_id');
    }

    public function collections()
    {
        return $this->belongsToMany(Koleksi::class, 'koleksi_reseps', 'resep_id', 'koleksi_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Kategori::class, 'resep_kategoris', 'resep_id', 'kategori_id');
    }

    public function utensills()
    {
        return $this->belongsToMany(Peralatan::class, 'resep_peralatans', 'resep_id', 'peralatan_id');
    }
}
