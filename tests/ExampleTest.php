<?php

use Illuminate\Console\Command;
use function Pest\Laravel\artisan;
use Rafi021\Example\Commands\ExampleCommand;

it('can test', function () {
    // dd(config('database'));
    artisan(ExampleCommand::class)->assertExitCode(Command::SUCCESS);
});
