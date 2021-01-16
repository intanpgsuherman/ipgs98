<?php

namespace Database\Factories;

use App\Models\dosen;
use Illuminate\Database\Eloquent\Factories\Factory;

class DosenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = dosen::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'NIP' => $this->faker->numberBetween(7006001, 7006002),
            'Nama' => $this->faker->name,
            'MataKuliah' => $this->faker->randomElement(['PWEB', 'TBO', 'SISTER']),
            'Alamat' => $this->faker->address,
        ];
    }
}
