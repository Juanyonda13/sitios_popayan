<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class siteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'minucipio' => $this->faker->city(),
            'sitio' => $this->faker->streetName (),
            'direccion' => $this->faker->country(),
            'telefono' => $this->faker->buildingNumber(),
            'correo'=> $this->faker->safeEmail(),
            'imagen'=> $this->faker->imageUrl(),
            'descripcion'=> $this->faker->realText(),
            'tipo_actividad'=> $this->faker->company(),
            'horario_atencion'=> $this->faker->dateTimeBetween(),
            'estado'=> $this->faker->buildingNumber(),
        ];
    }
}
