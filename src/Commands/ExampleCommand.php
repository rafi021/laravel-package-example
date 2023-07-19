<?php

namespace Rafi021\Example\Commands;

use Illuminate\Console\Command;

class ExampleCommand extends Command
{
    public $signature = 'package';

    public $description = 'My command';

    public function handle(): int
    {
        $text = config('package-example.command_output');
        $this->comment($text);

        return self::SUCCESS;
    }
}
