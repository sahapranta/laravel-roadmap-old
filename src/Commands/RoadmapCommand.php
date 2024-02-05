<?php

namespace Pranta\Roadmap\Commands;

use Illuminate\Console\Command;

class RoadmapCommand extends Command
{
    public $signature = 'laravel-roadmap';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
