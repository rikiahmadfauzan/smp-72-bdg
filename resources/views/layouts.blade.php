<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>smpn 72 bandung</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/logosc.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    
    <link href="assets/css/style.css" rel="stylesheet" />





<body>
   <-- ===== Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <div class="logo">
                <img src="assets/img/logosc.jpg" alt="">
            </div>
            <h3 class="logo me-auto p-2"><a href="#">SMP 72 BANDUNG</a></h3>
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link {{ Request::is('home*') ? 'active' : '' }}" href="/home">HOME</a></li>
                    <li class="dropdown">
                        <a href="#"><span>PROFIL</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a class="nav-link {{ Request::is('sejarah*') ? 'active' : '' }}" href="/sejarah">Sejarah</a></li>
                            <li><a class="nav-link {{ Request::is('visi-misi*') ? 'active' : '' }}" href="/visi-misi">Visi & Misi</a></li>
                            <li><a class="nav-link {{ Request::is('identitas-sekolah*') ? 'active' : '' }}" href="/identitas-sekolah">Identitas Sekolah</a></li>
                            <li><a class="nav-link {{ Request::is('kepala-sekolah*') ? 'active' : '' }}" href="/kepala-sekolah">Kepala Sekolah</a></li>
                            <li><a class="nav-link {{ Request::is('guru-staff') ? 'active' : '' }}" href="/guru-staff">Guru & Staff</a></li>
                            <li><a class="nav-link {{ Request::is('struktur-organisasi*') ? 'active' : '' }}" href="/struktur-organisasi">Struktur Organisasi</a></li>
                            <li><a class="nav-link {{ Request::is('fasilitas*') ? 'active' : '' }}" href="/fasilitas">Fasilitas</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#"><span>PROGRAM</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a class="nav-link {{ Request::is('kurikulum*') ? 'active' : '' }}" href="/kurikulum">Kurikulum</a></li>
                            <li class="dropdown">
                                <a class="nav-link {{ Request::is('kesiswaan*') ? 'active' : '' }}" href="/kesiswaan"><span>Kesiswaan</span>
                                    <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a class="nav-link {{ Request::is('osis*') ? 'active' : '' }}" href="/osis">Osis</a></li>
                                    <li><a class="nav-link {{ Request::is('ekstrakulikuler*') ? 'active' : '' }}" href="/ekstrakulikuler">Ekstrakurikuler</a></li>
                                </ul>
                            </li>
                            <li><a class="nav-link {{ Request::is('humas*') ? 'active' : '' }}" href="/humas">Humas</a></li>
                            <li><a class="nav-link {{ Request::is('sarana-prasarana*') ? 'active' : '' }}" href="/sarana-prasarana">Sarana & Prasarana</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#"><span>PENGUMUMAN</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a class="nav-link {{ Request::is('ppdb*') ? 'active' : '' }}" href="/ppdb">PPDB 2023</a></li>
                            <li><a class="nav-link {{ Request::is('berita*') ? 'active' : '' }}" href="/berita-sekolah">Berita Sekolah</a></li>
                            <li><a class="nav-link {{ Request::is('prestasi*') ? 'active' : '' }}" href="/prestasi-siswa">Prestasi Siswa</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#"><span>GALERI</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a class="nav-link {{ Request::is('photo*') ? 'active' : '' }}" href="/photo">Photo</a></li>
                            <li><a class="nav-link {{ Request::is('vide*') ? 'active' : '' }}" href="/video">Video</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link {{ Request::is('kontak*') ? 'active' : '' }}" href="/kontak">KONTAK</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->
    @yield('content')
    <!-- Footer -->
    <footer id="footer">
        <div class="container d-md-flex py-4">
            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong></strong>. All Rights Reserved 2023,
                </div>
                <div class="credits">
                   <p>SMP NEGRI 72 BANDUNG</p>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-youtube"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>
