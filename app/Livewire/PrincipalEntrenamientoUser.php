<?php

namespace App\Livewire;

use App\Models\TrainingCard;
use Livewire\Component;

class PrincipalEntrenamientoUser extends Component
{
    public function render()
    {
        $trainingCards = TrainingCard::orderBy('id', 'desc')->get();
        return view('livewire.principal-entrenamiento-user', compact('trainingCards'));
    }
}
