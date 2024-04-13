<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class PrincipalCategory extends Component
{
    public function render()
    {
        $categorias = Category::orderBy('id', 'desc')->paginate(5);
        return view('livewire.principal-category', compact('categorias'));
    }
}
