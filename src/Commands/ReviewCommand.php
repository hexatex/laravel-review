<?php

namespace Hexatex\LaravelReview\Commands;

use Illuminate\Console\Command;

class ReviewCommand extends Command
{
    public $signature = 'review';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
