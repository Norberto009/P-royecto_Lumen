<?php

namespace Database\Factories;

use App\Models\Acthor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActhorFactory extends Factory{

    protected $model = Acthor::class;




    public function definition()
    {
        $gender=$this->faker->randomElement(['male', 'female']);
        return[
            'name'=>$this->faker->name($gender),
            'country'=>$this->faker->country,

        ];
    }

}
