<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Address;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'postcode' =>fake()->postcode(),
            'prefecture' =>fake()->prefecture(),
            'address_city' => fake()->city(),
            'address_street' => fake()->streetAddress(),
            'building' =>fake()->buildingNumber(),
            'tell' =>fake()->phoneNumber(),
        ];
  }
}
