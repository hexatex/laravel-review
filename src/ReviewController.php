<?php

namespace Hexatex\LaravelReview;

use App\Http\Requests\ReviewRequest;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ReviewController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(private ReviewService $reviewService)
    {}

    public function store(ReviewRequest $request, Reviewable $reviewable)
    {
        $review = $this->reviewService->store($request->validated(), $reviewable);

        // Wait to add return when I implement in a project, I may want to return length aware paginator of reviews, and
        // may want that configurable in the config file.
    }

    public function update(ReviewRequest $request, Review $review)
    {
        $this->reviewService->update($request->validated(), $review);
    }
}
