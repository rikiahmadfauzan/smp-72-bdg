@extends('admin.layAdmin')
@section('content')
<section class="py-1">
    <div class="container py-3">
        <a class="btn btn-primary" href="/admin/createStaff" data-bs-toggle="modal"
            data-bs-target="#exampleModal">Tambah Data Staff</a>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="">Tambah Data Staff
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="forms-sample" action="/admin/createStaff" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label">Upload Foto</label>
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" disabled
                                            placeholder="Upload Image">
                                        <span class="input-group-append">
                                            <input type="file" name="fotoStaff" id="fotoStaff" width=""
                                                height="" class="form-control bg-primary">
                                        </span>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label>Nama Staff</label>
                                <input type="text" class="form-control" name="namaStaff" id="namaStaff">
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
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @foreach ($staff as $item)
                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="/storage/{{ $item->fotoStaff }}" alt="menu" />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">{{ $item->namaStaff }}</h5>
                            </div>
                            <div class="text-center">
                                <a class="btn btn-sm btn-outline-danger mt-auto"
                                href="/admin/hapusStaff/{{ $item->id }}">Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
