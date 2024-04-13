<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = [
            'Entrenamientos' => 'Diversos programas de entrenamiento diseñados para ayudarte a alcanzar tus metas fitness, desde rutinas básicas hasta entrenamientos avanzados para diferentes objetivos.',
            'Nutrición' => 'Consejos, recetas y guías sobre nutrición para complementar tu entrenamiento y mantener una alimentación balanceada y saludable.',
            'Equipamiento' => 'Todo lo que necesitas para equipar tu espacio de entrenamiento en casa o en el gimnasio, incluyendo pesas, bandas elásticas, esterillas y más.',
            'Motivación' => 'Artículos, consejos y experiencias para mantenerte motivado y comprometido con tu rutina de entrenamiento a lo largo del tiempo.',
            'Salud y Bienestar' => 'Consejos y recomendaciones para cuidar tu salud y bienestar general, incluyendo prevención de lesiones, recuperación y técnicas de relajación.',
        ];

        foreach ($categorias as $nombre => $descripcion) {
            Category::create(compact('nombre', 'descripcion'));
        }
    }
}
