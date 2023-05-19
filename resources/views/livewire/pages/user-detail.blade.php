@push('style')
    <link rel="stylesheet" href="assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="assets/css/pages/datatables.css">
@endpush

<div>
    <div class="page-heading">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/user">User</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $data->uuid }}</li>
            </ol>
        </nav>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header ">
                                <h3>User Profile</h3>
                                <div class="row">
                                    <div class="col-3">
                                        <img src="{{ asset('assets/images/faces/1.jpg') }}" class="rounded"
                                            alt="Porfile Picture" style="width: 100%; /* opacity:60%; */">
                                        {{-- <div class="btn btn-danger container-fluid my-2">
                                            Unbanned
                                        </div> --}}
                                        <div class="btn btn-success container-fluid my-2">
                                            Active
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <table>
                                            <tr>
                                                <td class="py-2 fw-bold">Nama</td>
                                                <td class="px-3 fw-medium">:</td>
                                                <td>User Satu</td>
                                            </tr>
                                            <tr>
                                                <td class="py-2 fw-bold">Username</td>
                                                <td class="px-3 fw-medium">:</td>
                                                <td>{{ $data->username }}</td>
                                            </tr>
                                            <tr>
                                                <td class="py-2 fw-bold">Email</td>
                                                <td class="px-3 fw-medium">:</td>
                                                <td>{{ $data->email }}</td>
                                            </tr>
                                            <tr>
                                                <td class="py-2 fw-bold">Jenis Kelamin</td>
                                                <td class="px-3 fw-medium">:</td>
                                                <td>Pria</td>
                                            </tr>
                                            <tr>
                                                <td class="py-2 fw-bold">Pekerjaan</td>
                                                <td class="px-3 fw-medium">:</td>
                                                <td>{{ $data->pekerjaan }}</td>
                                            </tr>
                                            <tr>
                                                <td class="py-2 fw-bold">Pengikut</td>
                                                <td class="px-3 fw-medium">:</td>
                                                <td>500k</td>
                                            </tr>
                                            <tr>
                                                <td class="py-2 fw-bold">Postingan</td>
                                                <td class="px-3 fw-medium">:</td>
                                                <td>120</td>
                                            </tr>
                                            <tr>
                                                <td class="py-2 fw-bold">Bio</td>
                                                <td class="px-3 fw-medium">:</td>
                                                <td>" {{ $data->bio }} "</td>
                                            </tr>
                                        </table>
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
                                <h4>User Activity</h4>
                            </div>
                            <div class="card-body">
                                <table class="table" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Activity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>20/04/2023 </td>
                                            <td class="container">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit.
                                                Mauris vel lectus
                                                ipsum. Praesent in tincidunt nunc. Integer at maximus elit, ut pretium
                                                sem.
                                                Aliquam fermentum, justo quis tempor accumsan, massa tellus sagittis
                                                orci,
                                            </td>
                                        </tr>
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
    <script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <script src="assets/js/pages/datatables.js"></script>
@endpush
