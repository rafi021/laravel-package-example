<?php

use Illuminate\Console\Command;
use Rafi021\Example\Commands\ExampleCommand;

use function Pest\Laravel\artisan;

it('can test', function () {
    // dd(config('database'));
    artisan(ExampleCommand::class)->assertExitCode(Command::SUCCESS);
});
