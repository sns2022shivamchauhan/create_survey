<?php

namespace Database\Factories;

use App\Models\person;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' =>$this->faker->sentence, 
            'father_name' =>$this->faker->sentence, 
            'mother_name' =>$this->faker->sentence, 
            'Age' =>$this->faker->sentence, 
            'Gender' =>$this->faker->sentence, 
            'Address' =>$this->faker->sentence, 
            'City' =>$this->faker->sentence, 
            'state' =>$this->faker->sentence, 
            'email' =>$this->faker->sentence,
        ];
    }
}
