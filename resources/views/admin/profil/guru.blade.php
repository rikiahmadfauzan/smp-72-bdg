@extends('admin.layAdmin')
@section('content')
    <main id="main">
        <section>
            {{-- <form class="forms-sample" action="/admin/createJumlah" method="post">
                @csrf
                <div class="form-group">
                    <label>Jumlah Guru</label>
                    <input type="text" class="form-control" name="jumGuru" id="jumGuru" placeholder="Jumlah Guru">
                </div>
                <div class="form-group">
                    <label>Jumlah Murid</label>
                    <input type="text" class="form-control" name="jumMurid" id="jumMurid" placeholder="Jumlah Murid">
                </div>
                <div class="form-group">
                    <label>Jumlah Staff</label>
                    <input type="text" class="form-control" name="jumStaff" id="jumStaff" placeholder="Jumlah Staff">
                </div>
                <button type="submit" class="btn btn-outline-primary mt-3">Submit</button>
            </form>

            <div class="col-12 py-2 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-responsive">
                            <tr>
                                <th class="col col-1">No</th>
                                <th class="col col-3">Jumlah Guru</th>
                                <th class="col col-3">Jumlah Murid</th>
                                <th class="col col-3">Jumlah Staff</th>
                            @foreach ($jumlah as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->jumGuru }}</td>
                                    <td>{{ $item->jumMurid }}</td>
                                    <td>{{ $item->jumStaff }}</td>
                                    <td>
                                        <a href="/admin/editJumlah/{{ $item->id }}" class="btn btn-warning btn-sm">Edit</a>
                                        <div class="container py-3">
                                            <a class="btn btn-primary" href="/admin/editJumlah/{{ $item->id }}" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">Tambah Data Guru</a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="">Tambah Data Guru
                                                            </h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="forms-sample" action="/admin/createGuru" method="post"
                                                            <form class="forms-sample" action="/admin/createJumlah" method="post">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label>Jumlah Guru</label>
                                                                    <input type="text" class="form-control" name="jumGuru" id="jumGuru" placeholder="Jumlah Guru">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Jumlah Murid</label>
                                                                    <input type="text" class="form-control" name="jumMurid" id="jumMurid" placeholder="Jumlah Murid">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Jumlah Staff</label>
                                                                    <input type="text" class="form-control" name="jumStaff" id="jumStaff" placeholder="Jumlah Staff">
                                                                </div>
                                                                <button type="submit" class="btn btn-outline-primary mt-3">Submit</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div> --}}
            <div class="container py-3">
                <a class="btn btn-primary" href="/admin/createStaff" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">Tambah Data Guru</a>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="">Tambah Data Guru
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="forms-sample" action="/admin/createGuru" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label">Upload Foto</label>
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled
                                                    placeholder="Upload Image">
                                                <span class="input-group-append">
                                                    <input type="file" name="fotoGuru" id="fotoGuru" width=""
                                                        height="" class="form-control bg-primary">
                                                </span>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Guru</label>
                                        <input type="text" class="form-control" name="namaGuru" id="namaGuru">
                                    </div>
                                    <div class="container py-3">
                                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-1">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach ($guru as $item)
                        <div class="col mb-5">
                            <div class="card h-100">
                                <img class="card-img-top" src="/storage/{{ $item->fotoGuru }}" alt="menu" />
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder">{{ $item->namaGuru }}</h5>
                                    </div>
                                    <div class="text-center">
                                        <a class="btn btn-sm btn-outline-danger mt-auto"
                                            href="/admin/hapusGuru/{{ $item->id }}">Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
