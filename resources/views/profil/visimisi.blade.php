@extends('layouts')
@section('content')
    <main id="main">
        <section class="advertising">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item">Profil</li>
                        <li class="breadcrumb-item active" aria-current="page">Visi & Misi</li>
                    </ol>
                </nav>
            </div>
            <div class="container">
                <div class="row">
                    <div class="card border-0 col-6 shadow-sm">
                        <div class="card-title">
                            <h5 class="fw-bold text-center text-primary">Visi Sekolah</h5>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>Unggul dalam pelaksanaan Kurikulum</li>
                                <li>Unggul dalam Prestasi Akademik</li>
                                <li>Unggul dalam Prestasi non-Akademik</li>
                                <li>Unggul dalam prestasi aktivitas OSIS</li>
                                <li>Unggul dalam pelaksanaan kegiatan keagamaan</li>
                                <li>Unggul dalam apresiasi seni budaya dan lingkungan</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end py-2 mb-3">
                    <div class="card border-0 col-6 shadow-sm" style="shadow">
                        <div class="card-title">
                            <h5 class="text-center fw-bold text-primary">Misi Sekolah</h5>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>Melaksanakan kegiatan kurikulum secara efektif dan optimal</li>
                                <li>Melaksanakan pembelajaran secara efektif dan inovatif</li>
                                <li>Membentuk kelompok ilmiah ( “Bisma Science Club” )</li>
                                <li>Membentuk kelompok Informasi Komunikasi dan Teknologi.</li>
                                <li>Membentuk English Conversation Club ( ECC ).</li>
                                <li>Membentuk Kelas Kompetisi di tingkat paralel berdasarkan ranking.</li>
                                <li>Melaksanakan pembinaan olah raga</li>
                                <li>Melaksanakan pembinaan seni budaya</li>
                                <li>Melaksanakan pembinaan Paskibra</li>
                                <li>Melaksanakan pembinaan Jurnalistik</li>
                                <li>Melaksanakan pembinaan kepramukaan</li>
                                <li>Melaksanakan pelatihan kepemimpinan OSIS</li>
                                <li>Melaksanakan kegiatan penataan lingkungan</li>
                                <li>Melaksanakan kegiatan PMR ( Palang Merah Remaja )</li>
                                <li>Melaksanakan kegiatan keagamaan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
