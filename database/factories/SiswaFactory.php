<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nik' => $this->faker->regexify('[0-9]{16}'),
            'nama' => $this->faker->name(),
            'jns_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'tgl_lahir' => $this->faker->date(),
            'alamat' => $this->faker->address(),
            'agama' => $this->faker->randomElement(['Islam', 'Kriten', 'Budha', 'Konghucu', 'Katholik']),
            'goldar' => $this->faker->randomElement(['A', 'B', 'AB', 'O']),
        ];
    }
}
