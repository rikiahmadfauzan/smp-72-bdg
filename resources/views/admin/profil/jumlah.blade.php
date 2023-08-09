@extends('admin.layAdmin')
@section('content')
<main id="main">
    <section>
        <div class="container py-3">
            <a class="btn btn-primary" href="" data-bs-toggle="modal"
                data-bs-target="#exampleModal">Tambah Data</a>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="">Tambah Data
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="forms-sample" action="/admin/createJumlah" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Jumlah Guru</label>
                                    <input type="text" class="form-control" name="jumGuru" id="jumGuru">
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Murid</label>
                                    <input type="text" class="form-control" name="jumMurid" id="jumMurid">
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Staff</label>
                                    <input type="text" class="form-control" name="jumStaff" id="jumStaff">
                                </div>
                                <button type="submit" class="btn btn-outline-primary mt-3">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 py-2 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <table class="table table-responsive">
                        <tr>
                            <th class="col col-4">Jumlah Guru</th>
                            <th class="col col-4">Jumlah Murid</th>
                            <th class="col col-4">Jumlah Staff</th>
                            <th class="col col-4">AKSI</th>
                        @foreach ($jumlah as $item)
                            <tr>
                                <td>{{ $item->jumGuru }}</td>
                                <td>{{ $item->jumMurid }}</td>
                                <td>{{ $item->jumStaff }}</td>
                                <td>
                                    <a href="/admin/editJumlah/{{ $item->id }}" class="btn btn-warning btn-sm">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
