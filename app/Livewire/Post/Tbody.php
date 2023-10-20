<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class Tbody extends Component
{
    public Post $post;
    public $message;
    public function render()
    {
        return view('livewire.post.tbody');
    }
}
