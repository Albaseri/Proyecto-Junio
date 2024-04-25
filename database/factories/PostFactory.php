<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        fake()->addProvider(new \Mmo\Faker\PicsumProvider(fake()));

           return [
               'titulo'=>fake()->words(3,true),
               'contenido'=>fake()->text(),
               'imagen'=>'posts/'. fake()->picsum('public/storage/posts',640,480,false),
               //Me traigo todas las categorías y le asigno un id aleatorio al artículo que estoy creando
               'category_id'=>Category::all()->random()->id
               //! user_id
           ];
    }
}
