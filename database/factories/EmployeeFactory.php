<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female']);
        $image = $this->faker->imageUrl(100,100,'cats');
        //https://via.placeholder.com/350x150
        static $id = 1;
        return [
            'first_name' => $this->faker->firstName($gender),
            'last_name' => $this->faker->lastName($gender),
            'gender' => ($gender == 'male' ? 1 : 0),
            'photo' => 'https://lorempixel.com/100/100/animals/' . $id++,
            'personal_email' => $this->faker->unique()->safeEmail()
        ];
    }
}
