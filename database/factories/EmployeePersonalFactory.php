<?php

namespace Database\Factories;

use App\Models\EmployeePersonal;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeePersonalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EmployeePersonal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $marital_status = $this->faker->randomElement(['single', 'married','widowed','divorced']);
        $bloodGroup = $this->faker->randomElement(['O+','O-','A+','A-','B+','B-','AB+','AB-']);
        return [
            'address1' => $this->faker->address(),
            'address2' => $this->faker->address(),
            'contact_number' => $this->faker->phoneNumber,
            'birth_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'marital_status' => $marital_status,
            'father_name' => $this->faker->name('male'),
            'mother_name' => $this->faker->name('female'),
            'hobbies' => $this->faker->sentence,
            'blood_group' => $bloodGroup
        ];
    }
}
