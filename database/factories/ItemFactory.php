<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Item;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    protected $model = Item::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(3),
            'status' => $this->faker->boolean(50),
            'created_at' => $this->faker->dateTimeBetween('-30 days', 'now'),
            'updated_at' => $this->faker->dateTimeBetween(
                $this->faker->dateTimeBetween('-30 days', 'now'),
                'now'
            ),
        ];
    }

    public function active()
    {
        return $this->state(fn(array $attributes) => [
            'status' => 1,
        ]);
    }

    public function inactive()
    {
        return $this->state(fn(array $attributes) => [
            'status' => 0,
        ]);
    }
}
