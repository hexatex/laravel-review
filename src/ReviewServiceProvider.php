<?php

namespace Hexatex\LaravelReview;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Hexatex\LaravelReview\Commands\ReviewCommand;

class ReviewServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('review')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_review_table')
            ->hasCommand(ReviewCommand::class);
    }
}
