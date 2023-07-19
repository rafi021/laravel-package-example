<?php

use Rafi021\Example\Http\Controllers\MyController;

it('has a route', function(){
    $this->get(action([MyController::class, 'index']))
    ->assertOk()
    ->assertSee('Hello from package view');
});
