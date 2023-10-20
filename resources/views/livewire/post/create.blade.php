<div>
    <x-alert></x-alert>
    <div class="card">
        <form action="" wire:submit="save">
            <div class="card-body">
                <h5 class="card-title">Tambah Artikel</h5>
                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" wire:model="form.title" name="title" id="title"
                        class="form-control  @error('form.title') is-invalid @enderror" placeholder="Tambah Judul">
                    <div class="invalid-feedback">
                        @error('form.title')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="title">Body</label>
                    <textarea name="body" wire:model="form.body" placeholder="Tambahkan body" id="body"
                        class="form-control @error('form.body') is-invalid @enderror" cols="30" rows="10"></textarea>
                    <div class="invalid-feedback">
                        @error('form.body')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>

            </div>
        </form>
    </div>

</div>
