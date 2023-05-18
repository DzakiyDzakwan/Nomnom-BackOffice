<div>
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h1 class="modal-title fs-5 white" id="exampleModalLabel">Edit Peralatan Dapur</h1>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="save">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="utensill" class="form-label">Nama Alat</label>
                            <input type="text" class="form-control" id="utensill" aria-describedby="Kategori"
                                wire:model.defer="utensill" placeholder="Masukkan disini...">
                            @error('utensill')
                                <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="source" class="form-label">Bahan</label>
                            <input type="text" class="form-control" id="source" aria-describedby="Kategori"
                                wire:model.defer="source" placeholder="Masukkan disini...">
                            @error('source')
                                <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar</label>
                            <input type="file" class="form-control" id="image" wire:model="image">
                            @error('image')
                                <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        @if (!$errors->has('image'))
                            @if ($image)
                                <div class="mb-3">
                                    <label for="preview" class="form-label">Preview Gambar</label>
                                    <img src="{{ $image->temporaryUrl() }}" class="form-control rounded mx-auto"
                                        alt="preview image" style="width: 80%;">
                                </div>
                            @endif
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-warning">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
