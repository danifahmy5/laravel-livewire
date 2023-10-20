<div class="container">
    <form wire:submit="login" action="" class="d-flex justify-content-center">
        <div class="card" style="width:500px">
            <div class="card-body">
                <h3>Login</h3>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input wire:model="form.email" type="email" class="form-control" name="email" id="email"
                        placeholder="Email Terdaftar">
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input wire:model="form.password" type="password" class="form-control" name="password"
                        id="password" placeholder="Ketikkan Password">
                    @error('form.password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary" type="submit">Login</button>
            </div>
        </div>
    </form>
</div>
