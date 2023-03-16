<?php

namespace Hexatex\LaravelReview;

use Illuminate\Database\Eloquent\Relations\MorphMany;

interface Reviewable
{
    /**
     * @return MorphMany
     */
    public function reviews();
}
