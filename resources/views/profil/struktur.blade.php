@extends('layouts')
@section('content')
<main id="main">
    <section>
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item">Profil</li>
                    <li class="breadcrumb-item active" aria-current="page">Struktur Organisasi</li>
                </ol>
            </nav>
        </div>
        <div class="container shadow-sm">
            <div class="row">
                <h5 class="text-center">STRUKTUR KEPENGURUSAN SMPN 72 BANDUNG</h5>
            </div>
            <div class="text-center">
            <img class="img-fluid" src="assets/img/struktur.png" alt="">
            </div>
        </div>
    </section>
</main>
@endsection
