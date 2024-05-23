<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;

class PrincipalBlog extends Component
{
    public $selectedCategory;

    public function render()
    {
        $query = Post::query();

        if ($this->selectedCategory) {
            $query->whereHas('category', function ($query) {
                $query->where('id', $this->selectedCategory);
            });
        }

        $posts = $query->with('category')->get();
        $categorias = Category::all();

        return view('livewire.principal-blog', compact('categorias', 'posts'));
    }

    public function filterByCategory()
    {
        $this->render();
    }
}
