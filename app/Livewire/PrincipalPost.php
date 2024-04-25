<?php

namespace App\Livewire;

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
        $posts = Post::where('titulo', 'like', "%$this->buscar%")
        ->orWhere('contenido', 'like', "%$this->buscar%")
        ->orderBy('id','desc')
        ->paginate(5);
        return view('livewire.principal-post',compact('posts'));
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
        $rutaImagen = 'public/storage/' . $post->imagen;
        
                
        // Elimina la imagen
        Storage::delete($rutaImagen);
    }

    // Elimino post
    $post->delete();
 
         $this->dispatch('mensaje', 'Post eliminado');
     }
}
