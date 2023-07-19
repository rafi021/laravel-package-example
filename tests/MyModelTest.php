<?php

use Rafi021\Example\Models\MyModel;

it('can create a model', function () {
    $mymodel = MyModel::factory()->create();
    // dd($mymodel);
    $this->assertModelExists($mymodel);
});

it('can return the uppercase value', function () {
    /** @var MyModel $mymodel */
    $mymodel = MyModel::factory()->create(['name' => 'ibrahim']);
    expect($mymodel->getUpperCasedName())->toEqual('IBRAHIM');
});
