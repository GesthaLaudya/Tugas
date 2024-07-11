<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Galeri>
 */
class GaleriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul' => fake()->sentence(2),
            'gambar' => fake()->randomElement(
                [
                    'https://picsum.photos/id/237/200/300',
                    'https://picsum.photos/id/232/200/300',
                    'https://picsum.photos/id/250/200/300',
                ]
            ),
            'deskripsi' => fake()->sentence(),
            'status' => fake()->randomElement(
                [
                    'active',
                    'deactive',
                ]
            ),
        ];
    }
}
