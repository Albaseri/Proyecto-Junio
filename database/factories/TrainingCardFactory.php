<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TrainingCard>
 */
class TrainingCardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo'=>fake()->words(3,true),
            'descripcion'=>fake()->text(),
            'imagen'=>"cards/". fake()->picsum('public/storage/cards',640,480,false),
            'n_repeticiones'=>random_int(5,15),
            'n_series'=>random_int(1,10),
            'url_youtube'=>fake()->url(),   
            'estado'=>fake()->randomElement(['VISIBLE', 'NO VISIBLE']),
            'user_id'=>User::all()->random()->id 
        ];
    }
}
