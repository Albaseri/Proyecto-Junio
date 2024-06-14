<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class PrincipalPost extends Component
{
    use WithPagination;
    use WithFileUploads;

    public string $buscar = "";

    public function render()
    {
        $categoriaExiste = Category::where('nombre', 'like', "%" . $this->buscar . "%")->first();


        if ($this->buscar != '' && $categoriaExiste) {
            $posts = Post::where('category_id', '=', $categoriaExiste->id)
                ->orderBy('id', 'desc')
                ->paginate(5);
        } else {
            $posts = Post::where('titulo', 'like', "%$this->buscar%")
                ->orWhere('contenido', 'like', "%$this->buscar%")
                ->orderBy('id', 'desc')
                ->paginate(5);
        }
        return view('livewire.principal-post', compact('posts'));
    }

    public function updatingBuscar()
    {
        $this->resetPage();
    }

    //! Funciones para delete
    public function confirmarDelete(Post $post)
    {
        // $this->authorize('delete', $post);

        $this->dispatch('pedir-permiso', $post->id);
    }

    #[On('deleteConfirmado')]
    public function delete(Post $post)
    {
        //  $this->authorize('delete', $post);

        // Compruebo imagen
        if (basename($post->imagen) != "defecto.jpg") {
            Storage::delete($post->imagen);
        }
        // Elimino post
        $post->delete();

        flash()->success('Post eliminado con éxito');

        $this->dispatch('mensaje', 'Post eliminado con éxito');
    }
}
