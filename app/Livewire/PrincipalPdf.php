<?php

namespace App\Livewire;

use App\Models\Pdf;
use Livewire\Component;

class PrincipalPdf extends Component
{
    public function render()
    {
        
        $pdfs = Pdf::orderBy('id', 'desc')->paginate(5);
        return view('livewire.principal-pdf',compact('pdfs'));
    }
}
