@extends('templates.mainTemplate')

@section('title', $portfolio->nama_proyek)

@section('konten')
<!-- Page Title -->
<div class="page-title dark-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Detail Portfolio</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="/">Home</a></li>
                <li class="current">Portfolio Details</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->

<!-- Portfolio Details Section -->
<section id="portfolio-details" class="portfolio-details section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

            <div class="col-lg-8">
                <div class="portfolio-details-slider swiper init-swiper">

                    <div class="swiper-wrapper align-items-center">

                        <div class="swiper-slide">
                            <img src="{{ asset($portfolio->foto) }}" alt="{{ $portfolio->nama_proyek }}" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="portfolio-info" data-aos="fade-left" data-aos-delay="200">
                    <h3>Informasi Proyek</h3>
                    <ul>
                        <li><strong>Kategori</strong>: {{ $portfolio->kategori }}</li>
                        <li><strong>Tanggal Proyek</strong>: {{ \Carbon\Carbon::parse($portfolio->tanggal_pembuatan)->translatedFormat('d F Y') }}</li>
                        <li><strong>Link Proyek</strong>: <a href="{{ $portfolio->link }}" target="_blank">{{ $portfolio->link }}</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
                    <h2>Deskripsi</h2>
                    <p>
                    {{ $portfolio->deskripsi }}
                    </p>

                    {{-- <div class="features mt-4">
                        <h3>Key Features</h3>
                        <div class="row gy-3">
                            <div class="col-md-6">
                                <div class="feature-item" data-aos="fade-up" data-aos-delay="400">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <h4>Responsive Design</h4>
                                    <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                        occaecati cupiditate non provident</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="feature-item" data-aos="fade-up" data-aos-delay="500">
                                    <i class="bi bi-shield-check"></i>
                                    <h4>Advanced Security</h4>
                                    <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat tarad limino ata</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="feature-item" data-aos="fade-up" data-aos-delay="600">
                                    <i class="bi bi-graph-up"></i>
                                    <h4>Performance Optimization</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="feature-item" data-aos="fade-up" data-aos-delay="700">
                                    <i class="bi bi-gear"></i>
                                    <h4>Easy Integration</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                        deserunt mollit anim id est laborum</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>

        </div>

    </div>

</section><!-- /Portfolio Details Section -->
@endsection
