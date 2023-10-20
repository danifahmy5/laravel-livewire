<div>
    @foreach ($posts as $post)
        <livewire:post.tbody :post="$post" wire:key="{{ $post->id }}" />
    @endforeach
</div>
