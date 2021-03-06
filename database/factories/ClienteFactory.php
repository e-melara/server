<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'nombres' => $this->faker->name(),
      'apellidos' => $this->faker->lastName(),
      'email' => $this->faker->email(),
      'telefono' => $this->faker->numerify('7#######'),
      'celular' => $this->faker->numerify('7#######'),      
      'direccion' => $this->faker->address()      
    ];
  }
}
