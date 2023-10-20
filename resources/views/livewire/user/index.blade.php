<div>
    <form action="" wire:submit="search">
        <input type="search" class="form-control" wire:model.live="search" placeholder="Cari User ...">
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">E-amail</th>
                <th scope="col">Name</th>
                <th scope="col">Joined</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td scope="col">{{ $loop->index + $users->firstItem() }}</td>
                    <td scope="col">{{ $user->email }}</td>
                    <td scope="col">{{ $user->name }}</td>
                    <td scope="col">{{ $user->created_at->format('d F,Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
</div>
