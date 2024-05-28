<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\UploadedFile;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pdf>
 */
class PdfFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $pdfFile = UploadedFile::fake()->create('document.pdf');

        $filePath = $pdfFile->store('pdfs');
        return [
            'nombre_archivo' => fake()->words(10, true),
            'ruta' => $filePath,
            'user_id' => User::all()->random()->id
        ];
    }
}
