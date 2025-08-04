<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artikel extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function relatedArtikel()
    {
        return $this->hasMany(RelatedArtikel::class, 'artikel_id', 'id');
    }
}
