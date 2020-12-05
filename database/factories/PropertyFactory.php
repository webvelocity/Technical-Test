<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Property;
use App\Models\User;

class PropertyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Property::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(4),
            'image' => $this->faker->text,
            'slug' => $this->faker->slug,
            'address' => $this->faker->text,
            'suburb' => $this->faker->word,
            'city' => $this->faker->city,
            'postalcode' => $this->faker->word,
            'share_price' => $this->faker->randomFloat(0, 0, 9999999999.),
            'min_deposit' => $this->faker->randomFloat(0, 0, 9999999999.),
            'published_at' => $this->faker->dateTime(),
            'author_id' => User::factory(),
        ];
    }
}
