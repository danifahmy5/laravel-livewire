<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <x-nav-link :active="request()->routeIs('home')" href="{{ route('home') }}">Home</x-nav-link>
                <x-nav-link :active="request()->routeIs('timeline')" href="{{ route('timeline') }}">timeline </x-nav-link>
                <x-nav-link :active="request()->routeIs('contact')" href="{{ route('contact') }}">Kontak </x-nav-link>
                <x-nav-link :active="request()->routeIs('user.index')" href="{{ route('user.index') }}">User</x-nav-link>

            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="btn btn-danger btn-sm">Logout</button>
                    </form>
                @endauth


            </ul>

        </div>
    </div>
</nav>
