<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            // 'deskripsi' => $this->faker->deskripsi,
            // 'users' => $this->faker->name,
            'id_kategori' => $this->faker->name,
            'stok' => $this->faker->randomNumber(2),
            'harga' => $this->faker->randomNumber(6),
            'produk_terjual' => $this->faker->randomNumber(2),
            'foto' => $this->faker->imageUrl(50, 50, 'technics', true, 'Faker'),
        ];
    }
}
