<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class Edit extends Component
{
    public $post;
    public $body;
    public function mount(Post $post)
    {
        $this->post = $post;
        $this->fill($post->only('body'));
    }
    public function render()
    {

        dd($this->body);
        return view('livewire.post.edit');
    }
}
