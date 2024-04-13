<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class PrincipalPost extends Component
{
    public function render()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(5);
        return view('livewire.principal-post',compact('posts'));
    }
}
