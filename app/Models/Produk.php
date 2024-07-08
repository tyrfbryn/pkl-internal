<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug','desc','price','stock','id_kategori'];

    public function kategoris()
    {
        return $this->BelongsTo(Kategori::class, 'id_kategori');
    }
}
