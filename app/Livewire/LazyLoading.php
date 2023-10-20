<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\On;
use Livewire\Component;

class LazyLoading extends Component
{
    #[On('postCreated')]
    public function updateList($post)
    {
    }

    

    public function render()
    {
        sleep(3);
        $posts = Post::with('user')->latest()->get(); 
        return view('livewire.lazy-loading',['posts' => $posts]);
    }
}
