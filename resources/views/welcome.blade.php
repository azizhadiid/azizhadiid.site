@extends('templates.mainTemplate')

@section('title', 'Aziz Alhadiid Portfolio')

@section('konten')
<!-- Hero Section -->
<section id="hero" class="hero section">

    <div class="background-elements">
        <div class="bg-circle circle-1"></div>
        <div class="bg-circle circle-2"></div>
    </div>

    <div class="hero-content">

        <div class="container">
            <div class="row">
                {{-- Error Alert --}}
                @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert" style="width: 100%">
                    <i class="bi bi-exclamation-circle-fill me-2"></i>
                    {{ $errors->first() }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                {{-- Success Alert --}}
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert" style="width: 100%">
                    <i class="bi bi-check-circle-fill me-2"></i>
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                {{-- Status Alert --}}
                @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert" style="width: 100%">
                    <i class="bi bi-check-circle-fill me-2"></i>
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            </div>

            <div class="row align-items-center">

                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <div class="hero-text">
                        <h1>Aziz<span class="accent-text">Folio</span></h1>
                        <h2>Aziz Alhadiid</h2>
                        <p class="lead">Aku adalah seorang <span class="typed"
                                data-typed-items="UI/UX Designer, Web Developer"></span>
                        </p>
                        <p class="description">Mahasiswa Sistem Informasi Universitas Jambi dengan keahlian Web
                            Development dan UI/UX Design. Berpengalaman membangun aplikasi menggunakan Laravel, React,
                            Next.js, dan MySQL melalui proyek kompetitif seperti Gemastik dan Study Club. Terbiasa
                            bekerja kolaboratif dan aktif membagikan karya di GitHub dan LinkedIn sebagai bentuk
                            profesionalisme.</p>

                        <div class="hero-actions">
                            <a href="#portfolio" class="btn btn-primary">Lihat Pekerjaan Saya</a>
                            <a href="#Kontak" class="btn btn-outline">Hubungin Saya</a>
                        </div>

                        <div class="social-links">
                            <a href="https://www.instagram.com/alhadiid_aziz?igsh=MWxncnd0bjBuOGt1Mw=="><i
                                    class="bi bi-instagram"></i></a>
                            <a href="https://www.facebook.com/share/1fUG1GG9U8/"><i class="bi bi-facebook"></i></a>
                            <a href="https://github.com/azizhadiid"><i class="bi bi-github"></i></a>
                            <a href="https://www.linkedin.com/in/aziz-alhadiid/"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <div class="hero-visual">
                        <div class="profile-container">
                            <div class="profile-background"></div>
                            <img src="{{ asset('assets/img/Profile.jpg') }}" alt="Aziz Alhadiid" class="profile-image">
                            <div class="floating-elements">
                                <div class="floating-icon icon-1"><i class="bi bi-palette"></i></div>
                                <div class="floating-icon icon-2"><i class="bi bi-code-slash"></i></div>
                                <div class="floating-icon icon-3"><i class="bi bi-lightbulb"></i></div>
                                <div class="floating-icon icon-4"><i class="bi bi-graph-up"></i></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section><!-- /Hero Section -->

<!-- About Section -->
<section id="Tentang" class="about section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
            <div class="col-lg-5" data-aos="zoom-in" data-aos-delay="200">
                <div class="profile-card">
                    <div class="profile-header">
                        <div class="profile-image">
                            <img src="{{ asset('assets/img/ft.jpg') }}" alt="Aziz Alhadiid" class="img-fluid">
                        </div>
                        <div class="profile-badge">
                            <i class="bi bi-check-circle-fill"></i>
                        </div>
                    </div>

                    <div class="profile-content">
                        <h3>Aziz Alhadiid</h3>
                        <p class="profession">Web Developer dan UIUX Desainer</p>

                        <div class="contact-links">
                            <a href="mailto:azizalhadiid55@gmail.com" class="contact-item">
                                <i class="bi bi-envelope"></i>
                                azizalhadiid55@gmail.com
                            </a>
                            <a href="tel:+6281366705844" class="contact-item">
                                <i class="bi bi-telephone"></i>
                                (+62) 81366705844
                            </a>
                            <a href="#" class="contact-item">
                                <i class="bi bi-geo-alt"></i>
                                Kota Jambi, Indonesia
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7" data-aos="fade-left" data-aos-delay="300">
                <div class="about-content">
                    <div class="section-header">
                        <span class="badge-text">Kenali Saya</span>
                        <h2>Bersemangat dalam Menciptakan Pengalaman Digital</h2>
                    </div>

                    <div class="description">
                        <p>
                            Perkenalkan, saya Aziz Alhadiid, mahasiswa Sistem Informasi Universitas Jambi yang memiliki
                            minat dan keahlian mendalam dalam pengembangan web, baik front-end maupun back-end. Saya
                            menguasai teknologi modern seperti PHP, JavaScript, dan berbagai framework seperti React,
                            Next.js, Laravel, dan Node.js. Saya juga menguasai sistem manajemen basis data seperti
                            MySQL, dan memiliki pemahaman yang baik tentang desain UI/UX untuk menghasilkan produk
                            digital yang intuitif dan responsif.
                        </p>

                        <p>
                            <ul>

                            </ul>
                        </p>
                    </div>

                    <div class="details-grid">
                        <div class="detail-row">
                            <div class="detail-item">
                                <span class="detail-label">Keahlian</span>
                                <span class="detail-value">Web Development & UI/UX Design</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Level Pengalman</span>
                                <span class="detail-value">Intermediate</span>
                            </div>
                        </div>
                        <div class="detail-row">
                            <div class="detail-item">
                                <span class="detail-label">Pendidikan</span>
                                <span class="detail-value">Sistem Informasi, Universitas Jambi</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Bahasa</span>
                                <span class="detail-value">Bahasa Indonesia, English</span>
                            </div>
                        </div>
                    </div>

                    <div class="cta-section">
                        <a href="{{ asset('CV.pdf') }}" class="btn btn-primary" target="_blank">
                            <i class="bi bi-download"></i>
                            Download CV
                        </a>
                        <a href="#Kontak" class="btn btn-outline">
                            <i class="bi bi-chat-dots"></i>
                            Ayo Berbincang
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section><!-- /About Section -->

<!-- Skills Section -->
<section id="skills" class="skills section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Skills</h2>
        <p>Menggabungkan keahlian teknis dan desain untuk menciptakan solusi digital yang efisien, menarik, dan
            berorientasi pada pengguna.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
            <div class="col-lg-6">
                <div class="skills-category" data-aos="fade-up" data-aos-delay="200">
                    <h3>Front-end Development</h3>
                    <div class="skills-animation">
                        <div class="skill-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4>HTML/CSS</h4>
                                <span class="skill-percentage">95%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                            <div class="skill-tooltip">Pengetahuan tingkat ahli tentang teknik semantik HTML5 dan CSS3
                                modern</div>
                        </div>

                        <div class="skill-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4>JavaScript</h4>
                                <span class="skill-percentage">75%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                            <div class="skill-tooltip">Solid dalam ES6+, DOM API, dan tumpukan JavaScript modern
                                termasuk React dan Next.js.</div>
                        </div>

                        <div class="skill-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4>React/Next.Js</h4>
                                <span class="skill-percentage">65%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                            <div class="skill-tooltip">Membangun UI yang nyaman dengan React dan menjelajahi fitur
                                Next.js seperti perutean, tata letak, dan pengambilan data.</div>
                        </div>
                    </div>
                </div><!-- End Frontend Skills -->
            </div>

            <div class="col-lg-6">
                <div class="skills-category" data-aos="fade-up" data-aos-delay="300">
                    <h3>Back-end Development</h3>
                    <div class="skills-animation">
                        <div class="skill-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4>Node.js</h4>
                                <span class="skill-percentage">65%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                            <div class="skill-tooltip">
                                Node.js & Express untuk API skalable dan integrasi backend yang efisien.
                            </div>
                        </div>

                        <div class="skill-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4>PHP/Laravel</h4>
                                <span class="skill-percentage">70%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                            <div class="skill-tooltip">
                                Terampil dalam routing Laravel, Blade templating, dan Eloquent ORM dengan fokus pada
                                clean code.
                            </div>
                        </div>

                        <div class="skill-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4>MySQL</h4>
                                <span class="skill-percentage">65%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                            <div class="skill-tooltip">Desain basis data, pengoptimalan, dan kueri kompleks.</div>
                        </div>
                    </div>
                </div><!-- End Backend Skills -->
            </div>
        </div>

    </div>

</section><!-- /Skills Section -->

<!-- Resume Section -->
<section id="resume" class="resume section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Resume</h2>
        <p>Saya adalah seorang mahasiswa Sistem Informasi di Universitas Jambi yang antusias membangun solusi digital
            melalui pengembangan web, desain UI/UX, dan manajemen basis data. Di bawah ini adalah ringkasan pengalaman,
            proyek, dan keahlian saya yang mencerminkan perjalanan profesional dan akademik saya sejauh ini.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
            <!-- Left column with summary and contact -->
            <div class="col-lg-4" style="height: 80%">
                <div class="resume-side" data-aos="fade-right" data-aos-delay="100">
                    <div class="profile-img mb-4">
                        <img src="{{ asset('assets/img/Profile.jpg') }}" alt="Aziz Alhadiid" class="img-fluid rounded">
                    </div>

                    <h3>Tentang Saya</h3>
                    <p>Mahasiswa Sistem Informasi Universitas Jambi dengan keahlian Web Development dan UI/UX Design.
                        Berpengalaman mengembangkan aplikasi menggunakan Laravel, React, Next.js, dan MySQL melalui
                        berbagai proyek seperti Dengue Server (Gemastik 2024), Calon Cerdas, PuskeSmart, e-commerce Rasa
                        Tangkit, dan Legends Room (Juara 1 Web Programming Study Club 2025). Terbiasa bekerja secara
                        kolaboratif, memiliki semangat belajar tinggi, dan aktif membagikan karya di GitHub dan LinkedIn
                        sebagai bentuk konsistensi profesional.</p>

                    <h3 class="mt-4">Informasi Kontak</h3>
                    <ul class="contact-info list-unstyled">
                        <li><i class="bi bi-geo-alt"></i> Kota Jambi, Jambi Indonesia</li>
                        <li><i class="bi bi-envelope"></i> azizalhadiid55@gmail.com</li>
                        <li><i class="bi bi-phone"></i> (+62) 81366705844</li>
                        <li><i class="bi bi-linkedin"></i> <a href="https://www.linkedin.com/in/aziz-alhadiid/"
                                style="text-decoration: none">linkedin.com/in/aziz-alhadiid/</a></li>
                    </ul>

                    <div class="skills-animation mt-4">
                        <h3>Technical Skills</h3>
                        <div class="skill-item">
                            <div class="d-flex justify-content-between">
                                <span>Web Development</span>
                                <span>85%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="skill-item">
                            <div class="d-flex justify-content-between">
                                <span>UI/UX Design</span>
                                <span>85%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right column with experience and education -->
            <div class="col-lg-8 ps-4 ps-lg-5">
                <!-- Experience Section -->
                <div class="resume-section" data-aos="fade-up">
                    <h3><i class="bi bi-briefcase me-2"></i>Pengalaman Kerja</h3>

                    <div class="resume-item">
                        <h4>Laravel Back-End Developer</h4>
                        <h5>Feb - Jun 2025</h5>
                        <p class="company"><i class="bi bi-building"></i> Universitas Jambi (Proyek Kampus).</p>
                        <ul>
                            <li>Memimpin pengembangan platform e-commerce berbasis Laravel untuk mendukung pemasaran
                                produk olahan dari Desa Tangkit Baru.</li>
                            <li>Membangun backend sistem menggunakan Laravel 12, mencakup manajemen produk, pesanan, dan
                                pengguna.</li>
                            <li>Mengintegrasikan sistem payment gateway Midtrans untuk transaksi yang cepat dan aman.
                            </li>
                            <li>Mengatur alur kerja tim, membagi tugas, dan melakukan review serta pengujian
                                fungsionalitas sistem.</li>
                        </ul>
                    </div>

                    <div class="resume-item">
                        <h4>Back-End Web Developer</h4>
                        <h5>Feb 2025</h5>
                        <p class="company"><i class="bi bi-building"></i>Himpunan Mahasiswa Sistem Informasi Universitas
                            Jambi (HIMASI UNJA)</p>
                        <ul>
                            <li>Juara 1 Study Club Batch 4 Divisi Pemrograman Web
                                Himpunan Sistem Informasi Universitas Jambi Februari 2025.</li>
                            <li>Ketua tim proyek Legends Room, platform penyewaan ruangan berbasis Laravel 11 &
                                Bootstrap 5. </li>
                            <li>Bertanggung jawab atas pengembangan back-end dan integrasi UI/UX yang responsif.</li>
                            <li>Mengelola struktur database dan mengimplementasikan autentikasi pengguna.</li>
                            <li>Merancang desain website yang responsive menggunakan Bootstrap 5.</li>
                        </ul>
                    </div>

                    <div class="resume-item">
                        <h4>Front-End Web Developer</h4>
                        <h5>Agu - Des 2024</h5>
                        <p class="company"><i class="bi bi-building"></i> Universitas Jambi (Proyek Kampus).</p>
                        <ul>
                            <li>Memimpin tim pengembangan platform PuskeSmart. </li>
                            <li>Mengembangkan UI PuskeSmart, sistem pendaftaran berobat puskesmas berbasis web.</li>
                            <li>Menerapkan desain responsif dan animasi JavaScript untuk pengalaman pengguna yang
                                interaktif. </li>
                            <li>Mengoptimalkan tampilan dengan Bootstrap 4 dan user-friendly.</li>
                            <li>Fokus pada desain yang intuitif di berbagai perangkat.</li>
                        </ul>
                    </div>
                </div>

                <!-- Education Section -->
                <div class="resume-section" data-aos="fade-up" data-aos-delay="100">
                    <h3><i class="bi bi-mortarboard me-2"></i>Pendidikan</h3>

                    <div class="resume-item">
                        <h4>S1 Sistem Informasi</h4>
                        <h5>2023 - Sekarang</h5>
                        <p class="company"><i class="bi bi-building"></i> Universitas Jambi</p>
                        <ul>
                            <li>Juara 1 Study Club Batch 4 Divisi Pemrograman Website. </li>
                            <li>Nilai A pada mata kuliah Rekayasa Perangkat Lunak,
                                Pemrograman Website 1 & 2</li>
                            <li>Anggota aktif Study Club Divisi Pemrograman Website dan UI/UX Design (Batch 2, 3, 4).
                            </li>
                            <li>Volunteer SI FUNDAY 2024 sebagai Pendamping Gugus.</li>
                            <li>Kontributor kegiatan Pengabdian Masyarakat: Pendamping TI untuk Praktek Dokter Bersama
                                Patimura.</li>
                        </ul>
                    </div>
                </div>

                <!-- Certifications Section -->
                <div class="resume-section" data-aos="fade-up" data-aos-delay="200">
                    <h3><i class="bi bi-award me-2"></i>Sertifikat</h3>

                    <div class="resume-item">
                        <h4>Study Club Batch 4 Divisi Pemrograman Web 2</h4>
                        <h5>2025</h5>
                    </div>

                    <div class="resume-item">
                        <h4>Study Club Batch 3 Divisi Pemrograman Web 1</h4>
                        <h5>2024</h5>
                    </div>
                    <div class="resume-item">
                        <h4>Study Club Batch 2 Divisi UI/UX Design</h4>
                        <h5>2024</h5>
                    </div>
                    <div class="resume-item">
                        <h4>Belajar Membuat Front-End Web untuk Pemula</h4>
                        <h5>Mei 2025 - Mei 2028</h5>
                    </div>
                    <div class="resume-item">
                        <h4>Belajar Dasar Pemrograman JavaScript</h4>
                        <h5>April 2025 - April 2028</h5>
                    </div>
                    <div class="resume-item">
                        <h4>Belajar Dasar Pemrograman Web</h4>
                        <h5>Mar 2025 - Mar 2028</h5>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section><!-- /Resume Section -->











<!-- Contact Section -->
<section id="Kontak" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Kontak</h2>
        <p>Silakan hubungi saya untuk kolaborasi, proyek freelance, atau pertanyaan seputar pengembangan web dan desain
            UI/UX. Saya akan dengan senang hati merespons secepat mungkin.</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row g-4 g-lg-5">
            <div class="col-lg-5">
                <div class="info-box">
                    <h3>Kontak Informasi</h3>
                    <p>
                        <p>Hubungi saya untuk kolaborasi atau pertanyaan lebih lanjut.</p>

                        <div class="info-item">
                            <div class="icon-box">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <div class="content">
                                <h4>Lokasi Saya</h4>
                                <p>Jl. Pagai No2. Rt.20</p>
                                <p>Jambi, Kota Jambi</p>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="icon-box">
                                <i class="bi bi-telephone"></i>
                            </div>
                            <div class="content">
                                <h4>Nomor HP</h4>
                                <p>(+62) 81366705844</p>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="icon-box">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div class="content">
                                <h4>Alamat Email</h4>
                                <p>azizalhadiid55@gmail.com</p>
                            </div>
                        </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="contact-form">
                    <h3>Hubungi Saya</h3>
                    <p>Terbuka untuk kolaborasi, proyek freelance, atau pertanyaan lainnya.</p>

                    <form action="{{ route('kontak.kirim') }}" method="post">
                        @csrf
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Nama Anda" required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Email Anda"
                                    required="">
                            </div>

                            <div class="col-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subyek" required="">
                            </div>

                            <div class="col-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Pesan"
                                    required=""></textarea>
                            </div>

                            <div class="col-12 text-center">
                                <button type="submit" class="btn">Kirim Pesan</button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>

        </div>

    </div>

</section><!-- /Contact Section -->
@endsection
