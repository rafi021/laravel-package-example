<?php

namespace Rafi021\Example\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Rafi021\Example\Models\MyModel;

class MyModelFactory extends Factory
{
    protected $model = MyModel::class;

    public function definition()
    {
        return [
            'name' => fake()->name
        ];
    }
}

