<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class PrincipalUsers extends Component
{
    use WithPagination;

    public string $buscar = "";
    public string $campo = "id", $orden = "desc";

    public function render()
    {
        $users = User::where('name', 'like', "%$this->buscar%")
            ->orWhere('email', 'like', "%$this->buscar%")
            ->orWhere('roles', 'like', "%$this->buscar%")
            ->orderBy('id', 'desc')
            ->paginate(5);

        return view('livewire.principal-users', compact('users'));
    }

    public function ordenar($campo)
    {
        $this->orden = ($this->orden == "asc") ? "desc" : "asc";
        $this->campo = $campo;
    }

    public function updatingBuscar()
    {
        $this->resetPage();
    }
}
