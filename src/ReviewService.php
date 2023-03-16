<?php

namespace Hexatex\Laravelreview;

class ReviewService
{
    /**
     * Store a Review
     * @param array{title: ?string, body: ?string, rating: ?int, approved: ?bool} $fill
     * @param Reviewable $reviewable
     * @return Review
     */
    public function store(array $fill, Reviewable $reviewable): Review
    {
        $review = new Review($fill);
        $review->reviewable()->associate($reviewable);
        $review->save();

        return $review;
    }

    /**
     * Update a review
     * @param array{title: ?string, body: ?string, rating: ?int, approved: ?bool} $fill
     * @param Review $review
     * @return void
     */
    public function update(array $fill, Review $review): void
    {
        $review->fill($fill);
        $review->save();
    }

    /**
     * Destroy a Review
     * @param Review $review
     * @return void
     */
    public function destroy(Review $review): void
    {
        $review->delete();
    }
}
