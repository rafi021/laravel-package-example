<?php

use Illuminate\Console\Command;
use Rafi021\Example\Commands\ExampleCommand;

use function Pest\Laravel\artisan;

it('can output the configured value', function () {
    // dd(config('database'));
    artisan(ExampleCommand::class)
    ->expectsOutput(config('package-example.command_output'))
    ->assertExitCode(Command::SUCCESS);
});

it('can output the another test', function () {
    config()->set('package-example.command_output', 'something else');

    artisan(ExampleCommand::class)
    ->expectsOutput('something else')
    ->assertExitCode(Command::SUCCESS);
});
