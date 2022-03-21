<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RegisterFactory extends Factory
{
  
   protected $model = Register::class;
  
    public function definition()
    {
        return [
            'content' => $this->faker->text(max_nb_chars=7)
        ];
    }   
}
