<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UsersFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $id = $this->faker->unique()->numberBetween(1, 100);
        
        return [
            'id' => $id,
            'login' => $this->faker->userName,
            'password' => hash('sha256', 'password', false),
            'email' => $this->faker->email,
            'name' => $this->faker->name,
            'company_id' => '1',
            'avatar' => $this->faker->imageUrl,
            'zip_code' => "88888-888",
            'city_id' => '1',
            'country_id' => '1',
            'address' => $this->faker->address,
            'tax_id' =>  "102.679.690-09",  
        ];
    }

    public function id($value): UsersFactory
    {
        return $this->state(fn (array $attributes) => [
            'id' => $value,
        ]);
    }

    public function login($value): UsersFactory
    {
        return $this->state(fn (array $attributes) => [
            'login' => $value,
        ]);
    }

    public function password($value): UsersFactory
    {
        return $this->state(fn (array $attributes) => [
            'password' => $value,
        ]);
    }

    public function email($value): UsersFactory
    {
        return $this->state(fn (array $attributes) => [
            'email' => $value,
        ]);
    }

    public function name($value): UsersFactory
    {
        return $this->state(fn (array $attributes) => [
            'name' => $value,
        ]);
    }
}
