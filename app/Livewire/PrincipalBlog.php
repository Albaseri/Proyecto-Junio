<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;

class PrincipalBlog extends Component
{
    public $selectedCategory;

    public function render()
    { $posts = $this->selectedCategory
        ? Post::where('category_id', $this->selectedCategory)->get()
        : Post::all();

    $categorias = Category::all();
        return view('livewire.principal-blog', compact('categorias', 'posts'));
    }

    public function filterByCategory()
    {
        $this->render();
    }
}
