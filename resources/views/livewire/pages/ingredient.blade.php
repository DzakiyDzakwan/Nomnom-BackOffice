@push('style')
    <link rel="stylesheet" href="{{ asset('assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pages/datatables.css') }}">
@endpush

<div>
    <div class="page-heading">
        <h3>Bahan Masakan</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon purple mb-2">
                                            <i class="iconly-boldShow"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Total Bahan</h6>
                                        <h6 class="font-extrabold mb-0">{{ $total }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h4>List Bahan</h4>
                                <div class="d-flex gap-2">
                                    {{-- Create Button --}}
                                    <button class="btn btn-small btn-success" data-bs-toggle="tooltip"
                                        data-bs-placement="rigth" title="Tambah" wire:click="$emit('show-create')">
                                        Tambah Bahan <i class="bi bi-pencil-square" style="font-size: 18px"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table" id="table1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Bahan</th>
                                            <th>Harga Pasaran</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bahan as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->nama_bahan }}</td>
                                                <td>Rp.{{ $item->harga }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <td>
                                                    {{-- Show Button --}}
                                                    {{-- <button class="btn btn-small btn-info" data-bs-toggle="tooltip"
                                                        data-bs-placement="rigth" title="Tooltip on top">
                                                        <i class="bi bi-eye"></i>
                                                    </button> --}}

                                                    {{-- Edit Button --}}
                                                    <button class="btn btn-small btn-warning" data-bs-toggle="tooltip"
                                                        data-bs-placement="rigth" title="Tooltip on top">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>

                                                    {{-- Delete Button --}}
                                                    <button class="btn btn-small btn-danger" data-bs-toggle="tooltip"
                                                        data-bs-placement="rigth" title="Tooltip on top">
                                                        <i class="bi bi-trash3"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- Modal --}}
    @livewire('components.modals.create-ingredient')
</div>

@push('script')
    <script>
        const createModal = new bootstrap.Modal('#createModal')
        // const editModal = new bootstrap.Modal('#editModal')

        window.addEventListener('toggle-create', event => {
            createModal.toggle();
        });
    </script>
@endpush
