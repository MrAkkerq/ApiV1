<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NotebookFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'company' => $this->faker->company,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'birthday' => $this->faker->date,
            'image' => $this->faker->image,
        ];
    }
}
