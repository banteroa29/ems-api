<?php

namespace Database\Factories;

use App\Models\WorkExperience;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkExperienceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WorkExperience::class;

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
            'company_name' => $this->faker->company,
            'designation' => $this->faker->jobTitle,
            'start_date' => $start_date,
            'end_date' => $end_date
        ];
    }
}
