<?php

namespace Usanzadunje\OpenAI\Commands;

use Illuminate\Console\Command;

class OpenAICommand extends Command
{
    public $signature = 'openai-for-laravel';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
