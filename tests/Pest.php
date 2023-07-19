<?php

use Illuminate\Support\Facades\Route;
use Rafi021\Example\Tests\TestCase;

uses(TestCase::class)
    ->beforeEach(function () {
        Route::example();
    })
    ->in(__DIR__);
