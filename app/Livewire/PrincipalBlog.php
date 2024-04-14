<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;

class PrincipalBlog extends Component
{
    public function render()
  
    {
        $posts = Post::with('category')->get();

        $categorias = Category::all();
        return view('livewire.principal-blog', compact('categorias','posts'));
    }
}
