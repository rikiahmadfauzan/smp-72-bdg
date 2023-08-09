@extends('admin.layAdmin')
@section('content')
<main id="main">
    <section id="kepala-sekolah" class="kepala-sekolah">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img src="assets/img/joko.jpg" class="img-fluid rounded-3" width="100%" alt="">
                    <div class="text-center py-3">
                        <h5 class="fw-bold">{{ $kepsek->namaKepsek }}</h5>
                    </div>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <h3>Sambutan Kepala Sekolah</h3>
                    <p class="fst-italic fw-bold">
                        Bismillahirohmannirrohim
                        Assalamualaikum Warahmatullah Wabarakatuh
                    </p>
                    <p>
                       {{ $kepsek->sambutan }}
                    </p>
                    <p>Wassalamualikum Wr. Wb.</p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
