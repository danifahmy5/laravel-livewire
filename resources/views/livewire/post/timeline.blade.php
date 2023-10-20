<div class="row">

    <div class="col">
        @livewire('post.create')
    </div>
    <div class="col">
        {{-- <livewire:lazy-loading lazy /> --}}

        <livewire:post.index :lazy="true" />

    </div>
</div>
