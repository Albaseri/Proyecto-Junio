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
            // Con orderByRaw puedo utilizar una cadena para ordenar, en este caso comienzo ordenando por ADMIN
            // A todos los usuarios los ordeno por id de forma descendente
            ->orderByRaw("CASE WHEN roles = 'ADMIN' THEN 1 ELSE 2 END, id DESC")
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
