<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_produk' => $this->faker->word(),
            'kategori' => $this->faker->randomElement(['Elektronik', 'Pakaian', 'Makanan', 'Aksesoris']),
            'harga' => $this->faker->numberBetween(10000, 1000000),
            'stok' => $this->faker->numberBetween(1, 100),
            'deskripsi' => $this->faker->sentence(),
            'tanggal_masuk' => $this->faker->date(),
        ];
    }
}
