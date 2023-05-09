<div>
    <!-- Modal -->
    <div wire:ignore.self class="modal bg-sucess fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Bahan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="save">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="id" class="form-label">ID Bahan</label>
                            <input type="text" class="form-control" id="id" aria-describedby="namaBahan"
                                wire:model.defer="id_bahan">
                            {{-- <div id="emailHelp" class="form-text text-danger">We'll never share your email with anyone
                                else.</div> --}}
                        </div>
                        <div class="mb-3">
                            <label for="nama_bahan" class="form-label">Bahan Masakan</label>
                            <input type="text" class="form-control" id="nama_bahan" aria-describedby="namaBahan"
                                wire:model.defer="bahan">
                            {{-- <div id="emailHelp" class="form-text text-danger">We'll never share your email with anyone
                                else.</div> --}}
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga Pasaran</label>
                            <input type="text" class="form-control" id="harga" wire:model.defer="harga">
                            {{-- <div id="emailHelp" class="form-text text-danger">We'll never share your email with anyone
                                else.</div> --}}
                        </div>
                        <div class="mb-3">
                            <label for="satuan" class="form-label">Satuan</label>
                            <input type="text" class="form-control" id="satuan" wire:model.defer="satuan">
                            <div id="emailHelp" class="form-text">e.g : ons, kilo, gram</div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
