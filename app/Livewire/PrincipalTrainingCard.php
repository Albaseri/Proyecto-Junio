<?php

namespace App\Livewire;

use App\Models\TrainingCard;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class PrincipalTrainingCard extends Component
{
    use WithPagination;
    use WithFileUploads;

    public string $buscar = "";

    public function render()
    {

        $trainingCards = TrainingCard::where('titulo', 'like', "%$this->buscar%")
            // ->orWhere('estado', 'like', "%$this->buscar%")
            ->orderBy('id', 'desc')
            ->paginate(5);
        return view('livewire.principal-training-card', compact('trainingCards'));
    }

    public function updatingBuscar()
    {
        $this->resetPage();
    }

    //! Funciones para delete
    public function confirmarDeleteCard(TrainingCard $trainingCard)
    {
        // $this->authorize('delete', $trainingCard);

        $this->dispatch('pedir-permisoCard', $trainingCard->id);
    }

    #[On('deleteConfirmadoCard')]
    public function delete(TrainingCard $trainingCard)
    {
        //  $this->authorize('delete', $trainingCard);

        // Compruebo imagen
        if (basename($trainingCard->imagen) != "defecto.jpg") {
            Storage::delete($trainingCard->imagen);
        }
        // Elimino trainingCard
        $trainingCard->delete();

        flash()->success('Training Card eliminada correctamente');
        $this->dispatch('mensaje', 'Training Card eliminada');
    }

    public function incrementarRepeticiones($trainingCardId)
    {
        $card = TrainingCard::findOrFail($trainingCardId);
        $card->increment('n_repeticiones');
    }

    public function decrementarRepeticiones($trainingCardId)
    {
        $card = TrainingCard::findOrFail($trainingCardId);
        if ($card->n_repeticiones > 0) {
            $card->decrement('n_repeticiones');
        }
    }
    public function incrementarSeries($trainingCardId)
    {
        $card = TrainingCard::findOrFail($trainingCardId);
        $card->increment('n_series');
    }

    public function decrementarSeries($trainingCardId)
    {
        $card = TrainingCard::findOrFail($trainingCardId);
        if ($card->n_repeticiones > 0) {
            $card->decrement('n_series');
        }
    }
}
