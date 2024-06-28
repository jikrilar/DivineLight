<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Beranda - ProjectDivineLight</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
                <h1 class="sitename">Divine Light</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Beranda<br></a></li>
                    <li><a href="#about">Tentang</a></li>
                    <li><a href="#services">Layanan</a></li>
                    <li><a href="#energy">Terkait</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="{{ route('report.create') }}">Buat Laporan</a>

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <img src="img/lamp.jpg" alt="" data-aos="fade-in">

            <div class="container">

                <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-xl-6 col-lg-8">
                        <h2>Automatic Streetlight IoT Control System.</h2>
                        <p>A Solution for Energy Effiency</p>
                    </div>
                </div>

            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">
                    <div class="col-lg-6 order-1 order-lg-2">
                        <img src="img/lamp2.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 order-2 order-lg-1 content">
                        <h3>Apa itu Projek Divine Light</h3>
                        <p class="fst-italic">
                            Divine Light adalah projek sistem IoT (Internet of Things) lampu jalan otomatis yang
                            merupakan
                            inovasi yang menggunakan
                            teknologi untuk mengendalikan lampu jalan secara cerdas dan efisien. Tujuan utama dari
                            proyek ini adalah untuk meningkatkan efisiensi energi, mengurangi biaya operasional, dan
                            meningkatkan keamanan di jalanan. Berikut adalah deskripsi sederhana tentang bagaimana
                            sistem ini bekerja:
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Sistem ini dirancang untuk menghemat energi.
                                    Lampu jalan hanya akan menyala saat dibutuhkan berkat sensor dan pengaturan
                                    otomatis. Ini mengurangi konsumsi listrik dibandingkan dengan lampu jalan
                                    konvensional yang menyala sepanjang malam. Dengan teknologi IoT, lampu-lampu ini
                                    terhubung ke internet, memungkinkan pengelolaan dan pemantauan jarak jauh melalui
                                    aplikasi atau dashboard. Petugas kota dapat memeriksa status setiap lampu, mengatur,
                                    atau menerima pemberitahuan jika ada masalah.</span></li>
                        </ul>
                    </div>
                </div>

            </div>

        </section>
        <!-- /About Section -->

        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Our Services</h2>
                <p>Contoh Monitoring Daya Lampu Jalan Secara Realtime</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-activity"></i>
                            </div>
                            <h3>Power</h3>
                            <h1>{{ $powerconsumption->power }}</h1>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-broadcast"></i>
                            </div>
                            <h3>Energy</h3>
                            <h1>{{ $powerconsumption->energy }}</h1>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-easel"></i>
                            </div>
                            <h3>Voltage</h3>
                            <h1>{{ $powerconsumption->voltage }}</h1>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-bounding-box-circles"></i>
                            </div>
                            <h3>Current</h3>
                            <h1>{{ $powerconsumption->current }}</h1>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section><!-- /Services Section -->

        <!-- Call To Action Section -->
        <section id="quote" class="call-to-action section">

            <img src="img/cta-bg.jpg" alt="">

            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="text-center">
                            <h3>Efisiensi Energi</h3>
                            <p>Efisiensi energi adalah upaya untuk mengurangi jumlah energi yang digunakan tanpa
                                mengurangi kualitas hasil atau layanan yang diberikan. Dengan menerapkan berbagai
                                strategi seperti penggunaan teknologi yang lebih efisien, pengoptimalan proses, dan
                                perilaku hemat energi, kita dapat mengurangi konsumsi energi, menghemat biaya, serta
                                mengurangi dampak negatif terhadap lingkungan.</p>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- /Call To Action Section -->

        <!-- Stats Section -->
        <section id="stats" class="stats section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 align-items-center justify-content-between">

                    <div class="col-lg-5">
                        <img src="img/lamp3.jpg" alt="" class="img-fluid">
                    </div>

                    <div class="col-lg-6">

                        <h3 class="fw-bold fs-2 mb-3">Voluptatem dignissimos provident quasi</h3>
                        <p>
                            Berikut adalah penjelasan mengenai sensor PIR, LDR, dan PZEM-004T:

                            Sensor PIR (Passive Infrared)
                            Sensor PIR adalah perangkat yang mendeteksi radiasi inframerah yang dipancarkan oleh objek
                            di sekitarnya. Sensor ini sangat umum digunakan untuk mendeteksi pergerakan manusia atau
                            hewan. Ketika ada perubahan dalam tingkat radiasi inframerah yang terdeteksi, sensor PIR
                            akan mengirimkan sinyal, yang sering digunakan untuk mengaktifkan lampu, alarm, atau
                            perangkat lain. Kelebihan sensor PIR termasuk konsumsi daya yang rendah dan jangkauan
                            deteksi yang cukup luas.
                            <br>
                            <br>
                            Sensor LDR (Light Dependent Resistor)
                            LDR adalah resistor yang resistansinya berubah berdasarkan intensitas cahaya yang jatuh pada
                            permukaannya. Saat cahaya yang diterima oleh LDR meningkat, resistansinya menurun, dan
                            sebaliknya, ketika cahaya berkurang, resistansinya meningkat.
                            <br>
                            <br>
                            PZEM-004T
                            PZEM-004T adalah modul sensor yang digunakan untuk mengukur berbagai parameter listrik,
                            termasuk tegangan, arus, daya aktif, energi, frekuensi, dan faktor daya pada sistem AC.
                            Sensor ini biasanya digunakan dalam aplikasi monitoring daya untuk memantau konsumsi listrik
                            secara real-time.
                        </p>

                    </div>

                </div>

            </div>

        </section><!-- /Stats Section -->

    </main>

    <footer id="footer" class="footer">

        <div class="copyright">
            <div class="container text-center">
                <p>© <span>Copyright</span> <strong class="px-1 sitename">DivineLight</strong> <span>All Rights
                        Reserved</span>
                </p>
                <div class="credits">
                    Designed by Kelompok 2 (KingSlayer)
                </div>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    {{-- <!-- Preloader -->
    <div id="preloader"></div> --}}

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>

    <!-- Main JS File -->
    <script src="js/main.js"></script>

</body>

</html>
