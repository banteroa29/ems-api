<?php

namespace Database\Factories;

use App\Models\EmployeeInformation;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeInformationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EmployeeInformation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'designation_id' => $this->faker->numberBetween(1,37),
            'employee_status_id' => $this->faker->numberBetween(1,5),
            'salary' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 10000, $max = 35000), // 48.8932
            'employee_number' => $this->faker->unique()->numberBetween(1,20),
            'work_email' => $this->faker->unique()->safeEmail(),
            'join_date' => $this->faker->date($format = 'Y-m-d', $max = 'now')
        ];
    }
}
