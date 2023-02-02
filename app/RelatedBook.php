<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RelatedBook extends Model
{
    protected $fillable = [
        'book_id', 'related_book_id', 'related_book_slug'
    ];

    public function books()
    {
        return $this->belongsTo(Book::class);
    }


}
