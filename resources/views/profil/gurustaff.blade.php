@extends('layouts')
@section('content')
    <section id="counts" class="counts py-lg-5">
        <div class="container py-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item">Profil</li>
                    <li class="breadcrumb-item active" aria-current="page">Guru & Staff</li>
                </ol>
            </nav>
        </div>
        <div class="container py-3">
        </div>
        <div class="container">
            <div class="row counters py-lg-2">
                <div class="col-lg-4 col-4 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="{{ $jumlah->jumGuru }}" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Guru</p>
                </div>

                <div class="col-lg-4 col-4 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="{{ $jumlah->jumMurid }}" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Murid</p>
                </div>

                <div class="col-lg-4 col-4 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="{{ $jumlah->jumStaff }}" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Staf</p>
                </div>
            </div>
        </div>


        <section class="py-1">
            <div class="container text-sm-center ">
                <h3 class="fw-bold">GURU SMP NEGRI 72 BANDUNG</h3>
            </div>
            <div class="container py-1 px-2 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach ($guru as $item)
                    <div class="col mb-5">
                        <div class="card h-100 shadow-sm border-0">
                            <img class="card-img-top" src="/storage/{{ $item->fotoGuru }}"/>
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">{{ $item->namaGuru }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="py-1">
            <div class="container text-sm-center">
                <h3 class="fw-bold">STAFF SMP NEGRI 72 BANDUNG</h3>
            </div>
            <div class="container px-2 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach ($staff as $item)
                    <div class="col mb-5">
                        <div class="card h-100 shadow-sm border-0">
                            <img class="card-img-top" src="/storage/{{ $item->fotoStaff }}"/>
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">{{ $item->namaStaff }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </section>
@endsection
