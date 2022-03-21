<?php

namespace Database\Factories;

use App\Models\Register;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegisterFactory extends Factory
{
  
   protected $model = Register::class;
  
    public function definition()
    {
        return [
            'content' => $this->faker->realtext($maxnbchars = 10)
        ];
    }   
}
