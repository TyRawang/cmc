<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Book extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function relatedBooks()
    {
        return $this->hasMany(RelatedBook::class);
    }

    public function scopeActive($query)
    {
        return $query->where('isActive', 1);
    }
}
