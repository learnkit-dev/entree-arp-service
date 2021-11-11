<?php

namespace LearnKit\EntreeArpService\Commands;

use Illuminate\Console\Command;

class EntreeArpServiceCommand extends Command
{
    public $signature = 'entree-arp-service';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
