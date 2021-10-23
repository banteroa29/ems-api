<?php

namespace Database\Factories;

use App\Models\EmployeeEducation;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeEducationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EmployeeEducation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $end_date = $this->faker->date($format = 'Y-m-d', $max = 'now');
        $start_date = $this->faker->date($format = 'Y-m-d', $max = $end_date);
        
        return [
            'course' => $this->faker->word(),
            'institution' => $this->faker->word(),
            'years_completed' => $this->faker->randomNumber(1,6),
            'start_date' => $start_date,
            'end_date' => $end_date
        ];
    }
}
