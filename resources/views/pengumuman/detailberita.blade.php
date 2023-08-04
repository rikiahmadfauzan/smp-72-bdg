@extends('layouts')
@section('content')
<main id="main">
    <section>
        <div class="container py-1">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item">Pengumuman</li>
                    <li class="breadcrumb-item">Berita Sekolah</li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Berita</li>
                </ol>
            </nav>
        </div>
        <div class="container px-4 px-lg-5 my-3">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6">
                    <img class="card-img-top rounded-3" src="assets/img/events-1.jpg" />
                </div>
                <div class="col-md-6">
                    <h1 class="display-5 fw-bolder">Nasi Ayam Goreng</h1>
                    <div class="fs-5 mb-5">
                        <span>10 juli 2023</span>
                    </div>
                    <p class="lead">Nasi goreng adalah makanan berupa nasi yang digoreng dan dicampur dalam minyak goreng,
                        margarin, atau mentega. Biasanya ditambah dengan kecap manis, bawang merah, bawang putih, asam jawa,
                        lada dan bahan lainnya; seperti telur, daging ayam, dan kerupuk.</p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
