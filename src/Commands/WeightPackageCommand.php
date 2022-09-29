<?php

namespace MohammedAlbalaawi\WeightPackage\Commands;

use Illuminate\Console\Command;

class WeightPackageCommand extends Command
{
    public $signature = 'weight-package';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
