<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>E-mail</th>
                <th>Judul</th>
                <th>Body</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <tbody> 
            <tr>
                @foreach ($posts as $post)
                    <livewire:post.tbody :post="$post" wire:key="{{ $post->id }}" />
                @endforeach
            </tr>
        </tbody>
        </tbody>
    </table>

</div>
