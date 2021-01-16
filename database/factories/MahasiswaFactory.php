<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class MahasiswaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = mahasiswa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'organization_id' => $this->faker->randomElement(['1','2']),
            'NPM' => $this->faker->numberBetween(187006109, 187006999),
            'Name' => $this->faker->Name,
            'slug' => Str::slug($this->faker->sentence()),
            'Class' => $this->faker->randomElement(['a', 'b', 'c']),
            'Address' => $this->faker->Address,
        ];
    }
}