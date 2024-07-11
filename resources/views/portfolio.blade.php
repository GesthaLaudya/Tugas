@extends('index')

@section('title', 'Portfolio')

@section('content')
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container">

    <div class="section-title">
      <h1>portfolio</h1>
      <p>Wellcome to my portfolio </p>
    </div>

    <!-- ===== Application Section ===== -->
    <section class="section-title">
      <h2></h2>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-4 col-md-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{ asset('assets/img/portfolio/uiux-01.png') }}" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{ asset('assets/img/portfolio/uiux-01.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Fisky Education - App"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Section -->

    <!-- ===== UIUX Section -->
    <section class="section-title">
      <h2>my Photo</h2>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-4 col-md-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{ asset('assets/img/portfolio/uiux-01.png') }}" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{ asset('assets/img/portfolio/uiux-01.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Fisky Education - App"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{ asset('assets/img/portfolio/uiux-02.png') }}" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{ asset('assets/img/portfolio/uiux-02.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Fisky Education - Web UI"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Section -->

    <!-- ===== Logo Section ===== -->
    <section class="section-title">
      <h2>Apk game</h2>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-4 col-md-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{ asset('assets/img/portfolio/logo-01.png') }}" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{ asset('assets/img/portfolio/logo-01.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Logo Design - Logo"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{ asset('assets/img/portfolio/logo-02.png') }}" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{ asset('assets/img/portfolio/logo-02.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Logo Design - Logo"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{ asset('assets/img/portfolio/logo-03.png') }}" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{ asset('assets/img/portfolio/logo-03.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Logo Design - Logo"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{ asset('assets/img/portfolio/logo-04.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{ asset('assets/img/portfolio/logo-04.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Logo Design - Logo"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{ asset('assets/img/portfolio/logo-05.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{ asset('assets/img/portfolio/logo-05.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Logo Design - Logo"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{ asset('assets/img/portfolio/logo-07.png') }}" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{ asset('assets/img/portfolio/logo-07.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Logo Design - Logo"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{ asset('assets/img/portfolio/logo-08.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{ asset('assets/img/portfolio/logo-08.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Logo Design - Logo"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{ asset('assets/img/portfolio/logo-09.png') }}" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{ asset('assets/img/portfolio/logo-09.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Logo Design - Logo"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Section -->

    <!-- ===== Graphic Design Section ===== -->
    <section class="section-title">
      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
        <h2>Logo Guild Game</h2>
        <div class="col-lg-4 col-md-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{ asset('assets/img/portfolio/design-02.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{ asset('assets/img/portfolio/design-02.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Graphic Design"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{ asset('assets/img/portfolio/edit-01.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{ asset('assets/img/portfolio/edit-01.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Graphic Design"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{ asset('assets/img/portfolio/design-01.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{ asset('assets/img/portfolio/design-01.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Graphic Design"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Section -->

    <!-- ===== Illustration Section ===== -->
    <section class="section-title">
      <h2>Edit photo HD</h2>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-4 col-md-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{ asset('assets/img/portfolio/illust-01.png') }}" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{ asset('assets/img/portfolio/illust-01.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Random Illustration"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{ asset('assets/img/portfolio/illust-02.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{ asset('assets/img/portfolio/illust-02.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Random Illustration"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{ asset('assets/img/portfolio/illust-03.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{ asset('assets/img/portfolio/illust-03.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Random Illustration"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{ asset('assets/img/portfolio/illust-04.png') }}" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{ asset('assets/img/portfolio/illust-04.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Random Illustration"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{ asset('assets/img/portfolio/illust-05.png') }}" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{ asset('assets/img/portfolio/illust-05.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Random Illustration"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Section -->
  </div>
</section>
<!-- End Portfolio Section -->
@endsection