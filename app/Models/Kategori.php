<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $guarded = [
        'created_at',
        'updated_at'
    ];

    public $incrementing = false;

    /**
     * The recipes that belong to the Kategori
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function recipes()
    {
        return $this->belongsToMany(Rocipes::class, 'resep_kategoris', 'kategori_id', 'resep_id');
    }

    /**
     * Get the subcategories that owns the Kategori
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subcategories()
    {
        return $this->belongsTo(SubKategori::class, 'sub_kategori_id', 'id');
    }
}
