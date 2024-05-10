<?php

namespace Database\Seeders;

use App\Models\Pdf;
use App\Models\Post;
use App\Models\TrainingCard;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{

    protected static ?string $password;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

         User::factory()->create([
             'name' => 'Administrador',
             'email' => 'admin@example.com',
             'password'=> static::$password ??= Hash::make('password'),
             'roles'=>"ADMIN",
         ]);


        User::factory(3)->create();

        $this->call(CategorySeeder::class);

        Storage::deleteDirectory('cards');
        Storage::makeDirectory('cards');

        Storage::deleteDirectory('posts');
        Storage::makeDirectory('posts');
     
        Storage::deleteDirectory('pdfs');
        Storage::makeDirectory('pdfs');

        Post::factory(30)->create();
        TrainingCard::factory(30)->create();

        Pdf::factory(5)->create();
    }
}
