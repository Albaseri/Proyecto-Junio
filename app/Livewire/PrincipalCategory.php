<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class PrincipalCategory extends Component
{

    use WithPagination;

    public string $buscar = "";
    public function render()
    {
        $categorias = Category::where('nombre', 'like', "%$this->buscar%")
            ->orderBy('id', 'desc')
            ->paginate(5);
        return view('livewire.principal-category', compact('categorias'));
    }
}
