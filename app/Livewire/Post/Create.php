<?php

namespace App\Livewire\Post;

use App\Livewire\Forms\PostForm;
use Livewire\Component;

class Create extends Component
{
    public PostForm $form;

    public function save()
    {
        $post = $this->form->save();

        $this->dispatch('postCreated', $post->id);
    }

    public function render()
    {
        return view('livewire.post.create');
    }
}
