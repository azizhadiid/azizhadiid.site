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
                        <p class="description">Passionate about creating exceptional digital experiences that blend
                            innovative design with functional development. Let's bring your vision to life.</p>

                        <div class="hero-actions">
                            <a href="#portfolio" class="btn btn-primary">Lihat Pekerjaan Saya</a>
                            <a href="#Kontak" class="btn btn-outline">Hubungin Saya</a>
                        </div>

                        <div class="social-links">
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-github"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <div class="hero-visual">
                        <div class="profile-container">
                            <div class="profile-background"></div>
                            <img src="{{ asset('assets/img/Profile.jpg') }}" alt="Alexander Chen" class="profile-image">
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
@endsection
