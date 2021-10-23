<?php

namespace Database\Factories;

use App\Models\EmployeeContact;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EmployeeContact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $relation = $this->faker->randomElement(['relative', 'acquaintance','friend']);
        return [
            'name' => $this->faker->name,
            'relationship' => $relation,
            'contact_number' => $this->faker->phoneNumber,
        ];
    }
}
