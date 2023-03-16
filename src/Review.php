<?php

namespace Hexatex\LaravelReview;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'title',
        'body',
        'rating',
        'approved',
    ];

    /*
     * Relationships
     */
    public function reviewable()
    {
        return $this->morphTo();
    }
}
