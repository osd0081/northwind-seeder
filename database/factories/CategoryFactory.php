<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        # assuming id autoincrement
        return [
            'category_name' => $this->faker->words(2, true),
            'description' => $this->faker->text(150),
            'picture' => '\x',
        ];
    }
}
