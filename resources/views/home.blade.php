@extends('index')

@section('title', 'Home')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
  <div class="hero-container" data-aos="fade-in">
    <h1>Gestha Laudya Putri</h1>
    <p>I'm <span class="typed" data-typed-items="Content Kreator, Gamers"></span></p>
  </div>
</section>
<!-- End Hero -->

<!-- ======= About Section ======= -->
<section id="about" class="about section-bg">
  <div class="container">

    <div class="section-title">
      <h2>About</h2>
      <p>Halo! Saya Gestha Laudya Putri, seorang pecinta matematika, gamer, dan konten kreator. Saya percaya bahwa kreativitas dan analisis dapat saling melengkapi dalam menciptakan pengalaman yang menarik dalam dunia digital.</p>
    </div>

    <div class="row">
      <div class="col-lg-4" data-aos="fade-right">
        <img src="{{ asset('assets/img/profile-image.jpg') }}" class="img-fluid" alt="">
      </div>
      <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
        <h3>Developer &amp; Content Creator.</h3>
        <p class="fst-italic">
        Sejak kecil, minat saya terhadap matematika telah membawa saya menjelajahi berbagai konsep yang menantang, yang sekarang saya terapkan dalam pemecahan masalah dan desain permainan. Sebagai seorang gamer, saya selalu terinspirasi oleh narasi, mekanika gameplay yang inovatif, dan interaksi sosial yang diciptakan oleh industri ini.
        </p>
        <div class="row">
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>18 maret 2005</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>081264299269</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Sipirok Kab.Tapanuli Selatan</span></li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>19</span></li>
              
              <li><i class="bi bi-chevron-right"></i> <strong>Emails:</strong> <span>gesthalaudyaputrir@gmail.com</span></li>
              
            </ul>
          </div>
        </div>
        <p>
        Sebagai konten kreator, saya menikmati proses berbagi pengetahuan dan pengalaman dengan komunitas online. Dengan pengalaman saya dalam bidang ini, saya senang dapat berkolaborasi dan berbagi ide dengan orang-orang yang memiliki minat yang sama.
        </p>
        <a href="{{ route('about') }}">Lihat selengkapnya &gt;&gt;&gt;</a>
      </div>
    </div>

  </div>
</section>
<!-- End About Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
  <div class="container">

    
    <div class="row">
      <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
        <div class="icon"><i class="bi bi-camera-video"></i></div>
        <h4 class="title">Video Editing</h4>
        <p class="description">Saya  menerima permintaan edit video skala kasual hingga menengah.</p>
      </div>
      <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
        <div class="icon"><i class="bi bi-apple"></i></div>
        <h4 class="title">Design</h4>
        <p class="description">Saya akan mendesain logo yang sesuai dengan permintaan anda.</p>
      </div>
      <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
        <div class="icon"><i class="bi bi-book"></i></div>
        <h4 class="title">Education</h4>
        <p class="description">Saya akan membantu meembuat tugas sekolah-kuliah termasuk dalam bidang perhitungan.</p>
      </div>

    </div>

  </div>
</section>
<!-- End Services Section -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
  <div class="container">
    
    <div class="section-title">
      <h2>Portfolio</h2>
      <p>Berikut adalah beberapa aplikasi yang pernah saya mainkan sampai sekarang.</p>
    </div>

    <div class="row" data-aos="fade-up">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">Game Edukasi</li>
          <li data-filter=".filter-design">Game Multi Player</li>
          <li data-filter=".filter-uiux">Game Horror</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

      <div class="col-lg-4 col-md-6 portfolio-item filter-uiux filter-app">
        <div class="portfolio-wrap">
          <img src="{{ asset('assets/img/portfolio/uiux-01.png') }}" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/uiux-01.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Fisky Education - UI/UX Design"><i class="bx bx-plus"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-uiux">
        <div class="portfolio-wrap">
          <img src="{{ asset('assets/img/portfolio/uiux-02.png') }}" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/uiux-02.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Fisky Education - Website"><i class="bx bx-plus"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-design">
        <div class="portfolio-wrap">
          <img src="{{ asset('assets/img/portfolio/design-01.jpg') }}" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/design-01.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Wonderland above the clouds - Book Cover"><i class="bx bx-plus"></i></a>
            <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-design">
        <div class="portfolio-wrap">
          <img src="{{ asset('assets/img/portfolio/design-02.jpg') }}" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/design-02.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Jeruk Peras - Banner"><i class="bx bx-plus"></i></a>
          </div>
        </div>
      </div>

      {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-design">
        <div class="portfolio-wrap">
          <img src="{{ asset('assets/img/portfolio/edit-01.jpg') }}" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/edit-01.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Glowing eye - Edit"><i class="bx bx-plus"></i></a>
          </div>
        </div>
      </div> --}}

      {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-design">
        <div class="portfolio-wrap">
          <img src="{{ asset('assets/img/portfolio/illust-01.png') }}" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/illust-01.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Random doodle - Illustration"><i class="bx bx-plus"></i></a>
          </div>
        </div>
      </div> --}}

      {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-design">
        <div class="portfolio-wrap">
          <img src="{{ asset('assets/img/portfolio/illust-02.jpg') }}" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/illust-02.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Random doodle - Illustration"><i class="bx bx-plus"></i></a>
          </div>
        </div>
      </div> --}}

      <div class="col-lg-4 col-md-6 portfolio-item filter-design">
        <div class="portfolio-wrap">
          <img src="{{ asset('assets/img/portfolio/illust-03.jpg') }}" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/illust-03.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Random doodle - Illustration"><i class="bx bx-plus"></i></a>
          </div>
        </div>
      </div>

      {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-design">
        <div class="portfolio-wrap">
          <img src="{{ asset('assets/img/portfolio/illust-04.png') }}" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/illust-04.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Random doodle - Illustration"><i class="bx bx-plus"></i></a>
          </div>
        </div>
      </div> --}}

      {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-design">
        <div class="portfolio-wrap">
          <img src="{{ asset('assets/img/portfolio/illust-05.png') }}" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/illust-05.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Random doodle - Illustration"><i class="bx bx-plus"></i></a>
          </div>
        </div>
      </div> --}}

      {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-design">
        <div class="portfolio-wrap">
          <img src="{{ asset('assets/img/portfolio/logo-01.png') }}" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/logo-01.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="PSIK 2020B - Logo"><i class="bx bx-plus"></i></a>
          </div>
        </div>
      </div> --}}

      {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-design">
        <div class="portfolio-wrap">
          <img src="{{ asset('assets/img/portfolio/logo-02.png') }}" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/logo-02.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="PSIK 2020B - Logo"><i class="bx bx-plus"></i></a>
          </div>
        </div>
      </div> --}}

      <div class="col-lg-4 col-md-6 portfolio-item filter-design">
        <div class="portfolio-wrap">
          <img src="{{ asset('assets/img/portfolio/logo-03.png') }}" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/logo-03.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="PSIK 2020B - Logo"><i class="bx bx-plus"></i></a>
          </div>
        </div>
      </div>

      {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-design">
        <div class="portfolio-wrap">
          <img src="{{ asset('assets/img/portfolio/logo-04.jpg') }}" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/logo-04.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Dunia Horor - Logo"><i class="bx bx-plus"></i></a>
          </div>
        </div>
      </div> --}}

      {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-design">
        <div class="portfolio-wrap">
          <img src="{{ asset('assets/img/portfolio/logo-05.jpg') }}" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/logo-05.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Docodomo - Logo"><i class="bx bx-plus"></i></a>
          </div>
        </div>
      </div> --}}

      <div class="col-lg-4 col-md-6 portfolio-item filter-design">
        <div class="portfolio-wrap">
          <img src="{{ asset('assets/img/portfolio/logo-07.png') }}" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/logo-07.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Hello Newbie 8 - Logo"><i class="bx bx-plus"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-design">
        <div class="portfolio-wrap">
          <img src="{{ asset('assets/img/portfolio/logo-08.jpg') }}" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/logo-08.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Mavia - Logo"><i class="bx bx-plus"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-design">
        <div class="portfolio-wrap">
          <img src="{{ asset('assets/img/portfolio/logo-09.png') }}" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="{{ asset('assets/img/portfolio/logo-09.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Yin & Yang - Illustration"><i class="bx bx-plus"></i></a>
          </div>
        </div>
      </div>

    </div>
    <p class="text-center"><a href="{{ route('portfolio') }}">Lihat selengkapnya &gt;&gt;&gt;</a></p>
  </div>
</section>
<!-- End Portfolio Section -->

{{-- ======= Blog Section ======= --}}
<section id="blog" class="blog section-bg">
  <div class="container">
    <div class="section-title">
      <h2>Blog</h2>
    </div>

    <a href="{{ route('blog') }}">Lihat selengkapnya &gt;&gt;&gt;</a>
  </div>
</section>
{{-- End Blog Section --}}

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container">

    <div class="section-title">
      <h2>Contact</h2>
      <p>Silahkan hubungi saya melalui kontak di bawah untuk informasi lebih lanjut.</p>
    </div>

    <div class="row" data-aos="fade-in">

      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="info">
          <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>Location:</h4>
            <p>Gestha laudya</p>
          </div>

          <div class="email">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p>gesthalaudyaputri@gmail.com@gmail.com</p>
          </div>

          <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Call:</h4>
            <p>0812-6429-9269</p>
          </div>

         
        </div>

      </div>

      <!-- <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">Your Name</label>
              <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="form-group col-md-6">
              <label for="name">Your Email</label>
              <input type="email" class="form-control" name="email" id="email" required>
            </div>
          </div>
          <div class="form-group">
            <label for="name">Subject</label>
            <input type="text" class="form-control" name="subject" id="subject" required>
          </div>
          <div class="form-group">
            <label for="name">Message</label>
            <textarea class="form-control" name="message" rows="10" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div> -->

    </div>

  </div>
</section>
<!-- End Contact Section -->
@endsection