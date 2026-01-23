<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    protected $model = Producto::class;

    public function definition()
    {
        return [
            'nombre' => fake()->words(3, true),
            'precio' => fake()->randomFloat(2, 5, 5000),
            'descripcion' => fake()->sentence(12),
            'stock' => fake()->numberBetween(0, 500),
        ];
    }
}
