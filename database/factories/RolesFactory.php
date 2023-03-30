<?php

namespace Database\Factories;
use app\Models\Roles; 
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Roles>
 */
class RolesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //

            'name' =>$this->faker->sentence, 
            'role_description' => $this ->faker->sentence, 
            'id' => User::factory()
        ];
    }
}
