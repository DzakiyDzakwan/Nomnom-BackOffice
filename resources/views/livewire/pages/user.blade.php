@push('style')
    <link rel="stylesheet" href="{{ asset('assets/css/shared/iconly.css') }}">
    <link rel="stylesheet" href="assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="assets/css/pages/datatables.css">
@endpush

<div>
    <div class="page-heading">
        <h3>Pengguna Aplikasi</h3>
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
                                        <h6 class="text-muted font-semibold">Total Pengguna</h6>
                                        <h6 class="font-extrabold mb-0">{{ $total }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon green mb-2">
                                            <i class="iconly-boldProfile"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Pengguna Aktif</h6>
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
                                <h4>List Pengguna</h4>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-small btn-success" data-bs-toggle="tooltip"
                                        data-bs-placement="rigth" title="Tambah" wire:click="click">
                                        Tambah Admin <i class="bi bi-pencil-square" style="font-size: 18px"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $item)
                                            <tr>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->role }}</td>
                                                <td>
                                                    <span class="badge bg-success">Active</span>
                                                </td>
                                                <td>
                                                    <a class="btn btn-small btn-info" data-bs-toggle="tooltip"
                                                        data-bs-placement="rigth" title="Detail Pengguna"
                                                        href="/user-detail/{{ $item->uuid }}">
                                                        <i class="bi bi-eye"></i>
                                                    </a>
                                                    <button class="btn btn-small btn-warning" data-bs-toggle="tooltip"
                                                        data-bs-placement="rigth" title="Edit Pengguna">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>
                                                    <button class="btn btn-small btn-danger" data-bs-toggle="tooltip"
                                                        data-bs-placement="rigth" title="Hapus Pengguna">
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
</div>

@push('script')
    <script src="assets/extensions/jquery/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <script src="assets/js/pages/datatables.js"></script>
@endpush
