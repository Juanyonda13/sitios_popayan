<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class companyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->firstName();
            'direccion'=>$this->faker->streetAddres();
            'telefono'=>$this->faker->e164PhoneNumber();
        ];
    }
}
