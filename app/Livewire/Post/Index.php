<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Attributes\Lazy;
use Livewire\Attributes\On;
use Livewire\Component;

#[Lazy]
class Index extends Component
{
    #[On('postCreated')]
    public function updateList($post)
    {
    }

    public function placeholder()
    {

        return view('livewire.loading');
    }

    public function render()
    {
        $posts = Post::with('user')->latest()->get();

        return view('livewire.post.index', ['posts' => $posts]);
    }

    public function edit()
    {
        return view('livewire.post.edit');
    }
}
