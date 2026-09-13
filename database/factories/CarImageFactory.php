<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\CarImage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CarImage>
 */
class CarImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image_path' => function(array $attributes) {
                $car = Car::find($attributes['car_id']);
                return sprintf('https://placehold.co/600x400/gray/white/png?text=%s',
                $car->maker->id);
            },
            'position' => function(array $attributes){
                return Car::find($attributes['car_id'])->images()->count() + 1;
            }
        ];
    }
}
