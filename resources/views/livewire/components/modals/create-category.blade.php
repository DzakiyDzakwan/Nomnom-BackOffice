<div>
    <!-- Modal -->
    <div wire:ignore.self class="modal bg-sucess fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kategori</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="save">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="kategori_id" class="form-label">Kategori ID</label>
                            <input type="text" class="form-control" id="kategori_id" aria-describedby="kategori_id"
                                wire:model.defer="kategori_id" placeholder="Masukkan disini...">
                            {{-- <div id="emailHelp" class="form-text text-danger">We'll never share your email with anyone
                                else.</div> --}}
                        </div>
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Nama Kategori</label>
                            <input type="text" class="form-control" id="kategori" aria-describedby="Kategori"
                                wire:model.defer="kategori" placeholder="Masukkan disini...">
                            {{-- <div id="emailHelp" class="form-text text-danger">We'll never share your email with anyone
                                else.</div> --}}
                        </div>
                        <div class="mb-3">
                            <label for="sub_kategori" class="form-label">Sub Kategori</label>
                            <select class="form-control form-select" wire:model.defer="sub_kategori" id="sub_kategori"
                                name="sub_kategori" aria-label="Default select example">
                                <option value="">Pilih disini</option>
                                @foreach ($sub_list as $item)
                                    <option value="{{ $item->id }}">{{ $item->id }}</option>
                                @endforeach
                            </select>
                            {{-- <div id="emailHelp" class="form-text text-danger">We'll never share your email with anyone
                                else.</div> --}}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
