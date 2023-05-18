<div>
    <!-- Modal -->
    <div wire:ignore.self class="modal bg-sucess fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h1 class="modal-title fs-5 white" id="exampleModalLabel">Tambah Bahan</h1>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="save">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="id" class="form-label">Bahan ID</label>
                            <input type="text" class="form-control" id="id" aria-describedby="namaBahan"
                                wire:model.defer="bahan_id" placeholder="Masukkan disini...">
                            @error('bahan_id')
                                <div id="emailHelp" class="form-text text-danger">{{ $message }}.</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nama_bahan" class="form-label">Bahan Masakan</label>
                            <input type="text" class="form-control" id="nama_bahan" aria-describedby="namaBahan"
                                wire:model.defer="bahan" placeholder="Masukkan disini...">
                            @error('bahan')
                                <div id="emailHelp" class="form-text text-danger">{{ $message }}.</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga Pasaran</label>
                            <input type="text" class="form-control" id="harga" wire:model.defer="harga"
                                placeholder="Masukkan disini...">
                            @error('harga')
                                <div id="emailHelp" class="form-text text-danger">{{ $message }}.</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="satuan" class="form-label">Satuan</label>
                            <input type="text" class="form-control" id="satuan" wire:model.defer="satuan"
                                placeholder="Masukkan disini...">
                            <div id="emailHelp" class="form-text">satuan : ons, kilo, gram</div>
                            @error('satuan')
                                <div id="emailHelp" class="form-text text-danger">{{ $message }}.</div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
