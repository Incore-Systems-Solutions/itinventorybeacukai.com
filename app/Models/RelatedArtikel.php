<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RelatedArtikel extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function artikel()
    {
        return $this->belongsTo(Artikel::class, 'related_artikel_id', 'id');
    }
}
