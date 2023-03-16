<?php

namespace Hexatex\LaravelReview\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Hexatex\LaravelReview\ReviewService
 */
class Review extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Hexatex\LaravelReview\ReviewService::class;
    }
}
