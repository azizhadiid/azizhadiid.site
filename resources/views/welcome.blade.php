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
@endsection
