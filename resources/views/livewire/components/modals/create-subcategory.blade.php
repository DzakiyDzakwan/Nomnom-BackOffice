<div>
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h1 class="modal-title fs-5 white" id="exampleModalLabel">Tambah Sub Kategori</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="save">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="sub_id" class="form-label">Sub Kategori ID</label>
                            <input type="text" class="form-control" id="sub_id" aria-describedby="sub_id"
                                wire:model.defer="sub_id" placeholder="Masukkan disini...">
                            {{-- <div id="emailHelp" class="form-text text-danger">We'll never share your email with anyone
                                else.</div> --}}
                        </div>
                        <div class="mb-3">
                            <label for="sub_kategori" class="form-label">Nama Sub Kategori</label>
                            <input type="text" class="form-control" id="sub_kategori" aria-describedby="subKategori"
                                wire:model.defer="sub_kategori" placeholder="Masukkan disini...">
                            {{-- <div id="emailHelp" class="form-text text-danger">We'll never share your email with anyone
                                else.</div> --}}
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
