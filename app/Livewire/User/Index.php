<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public string $search = 'prof';

   public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $user = User::where('name', 'like', '%' . $this->search . '%')->paginate(5);
        return view('livewire.user.index',['users' => $user]);
    }
}
