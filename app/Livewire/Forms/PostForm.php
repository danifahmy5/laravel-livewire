<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Form;

class PostForm extends Form
{
    #[Rule('required|min:3', as: 'Judul')]
    public $title = '';

    #[Rule(rule: 'required|min:3', as: 'isi artikel')]
    public $body = '';

    public function save()
    {
        $validated = $this->validate();
        $user = Auth::user();
        $post = $user->posts()->create($validated);

        flash('berhasil menambahkan artikel', 'success');

        $this->reset();

        return $post;
    }
}
