@extends('index')

@section('title', 'About')

@section('content')
<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="section-title">
      <h1>About</h1>
      <p>Halo! Saya Gestha Laudya Putri, seorang pecinta matematika, gamer, dan konten kreator. Saya percaya bahwa kreativitas dan analisis dapat saling melengkapi dalam menciptakan pengalaman yang menarik dalam dunia digital.</p>
    </div>

    <div class="row">
      <div class="col-lg-4" data-aos="fade-right">
        <img src="{{ asset('assets/img/profile-image.jpg') }}" class="img-fluid" alt="">
      </div>
      <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
        <h3>Gamers &amp; Content Creator.</h3>
        <p class="fst-italic">
        Sejak kecil, minat saya terhadap matematika telah membawa saya menjelajahi berbagai konsep yang menantang, yang sekarang saya terapkan dalam pemecahan masalah dan desain permainan. Sebagai seorang gamer, saya selalu terinspirasi oleh narasi, mekanika gameplay yang inovatif, dan interaksi sosial yang diciptakan oleh industri ini.
        </p>
        <div class="row">
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>18 maret 2005</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>0812-6429-9269</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Medan, Indonesia</span></li>
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
      </div>
    </div>

  </div>
</section>
<!-- End About Section -->

<!-- ======= Facts Section ======= -->
{{-- <section id="facts" class="facts">
  <div class="container">

    <div class="section-title">
      <h2>Facts</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row no-gutters">

      <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
        <div class="count-box">
          <i class="bi bi-emoji-smile"></i>
          <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
          <p><strong>Happy Clients</strong> consequuntur quae</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
        <div class="count-box">
          <i class="bi bi-journal-richtext"></i>
          <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
          <p><strong>Projects</strong> adipisci atque cum quia aut</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
        <div class="count-box">
          <i class="bi bi-headset"></i>
          <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
          <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
        <div class="count-box">
          <i class="bi bi-people"></i>
          <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
          <p><strong>Hard Workers</strong> rerum asperiores dolor</p>
        </div>
      </div>

    </div>

  </div>
</section> --}}
<!-- End Facts Section -->

<!-- ======= Skills Section ======= -->
<section id="skills" class="skills section-bg">
  <div class="container">

    <div class="section-title">
      <h2>Skills</h2>
      <p>
        Sebagai gambaran, berikut adalah Gambaran kemampuan saya dalam mengedit sebuah video. Grafik berikut tidak sepenuhnya akurat dan mungkin akan berubah sewaktu-waktu.
      </p>
    </div>

    <div class="row skills-content">

      <div class="col-lg-6" data-aos="fade-up">

        <div class="progress">
          <span class="skill">Alighmotion <i class="val">Aplication</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

        <div class="progress">
          <span class="skill">Wink <i class="val">Aplication</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

        <div class="progress">
          <span class="skill">Capcut <i class="val">Aplication</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

      </div>
</section>
<!-- End Skills Section -->

<!-- ======= Resume Section ======= -->
<section id="resume" class="resume">
  <div class="container">

    <div class="section-title">
      <h2>Resume</h2>
      <p>
        Sebagai informasi pelengkap, berikut adalah informasi lengkap berupa ringkasan singkat dari pendidikan hingga pengalaman saya
        sebagai seorang gamers dan editor sekaligus.
      </p>
    </div>

    <div class="row">
      <div class="col-lg-6" data-aos="fade-up">
        <h3 class="resume-title">Sumary</h3>
        <div class="resume-item pb-0">
          <h4>Gestha Laudya Putri</h4>
          <p>
            <em>Seorang gamers dengan memulai karier nya sebagai gamers sekaligus konten kreator</em>
          </p>
          <ul>
            <li>Sipirok, Sumatera Utara</li>
            <li>0812-6429-9269</li>
            <li>gesthalaudyaputrir@gmail.com</li>
          </ul>
        </div>

        <h3 class="resume-title">Education</h3>
        <div class="resume-item">
          <h4>Social Media </h4>
          <h5>2020 - 2021</h5>
          <p><em>Youtube,Tiktok,Google</em></p>
          <p>Saya Belajar Mengedit dimulai dari rasa penasaran saya terhadap media sosial,sampai pada akhirnya saya mulai belajar memahami satu persatu tata dan cara serta aturan dan peraturan dalam dunia pengeditan,hingga saya menjadi seorang konten kreator.</p>
        </div>
        <div class="resume-item">
          <h4>SD- SMA</h4>
          <h5>2010 - 2024</h5>
          <p><em>MATEMATIKA</em></p>
          <p>Saya mendalami kemampuan saya dalam bidang matematika adalah dimulai sejak saya berumur 5th/SD.Hingga sampai kuliah pun saya masih meminati pelajaran matematika,meskipun saya kuliah di bidang komputer</p>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <h3 class="resume-title">Experience</h3>
        <div class="resume-item">
          <h4>Editor</h4>
          <h5>2021 - Now</h5>
          <p><em>Gestha laudya, Medan </em></p>
          <ul>
            <li>Menerima berbagai job terkait pembuatan tugas sekolah mulai dari SD-SMP-SMA.</li>
            <li>Menerima job edit video,photo</li>
            <li>Menerima urusan scan/edit dokumen.</li>
            <li>Menerima berbagai job terkait pembuatan design hingga tugas makalah.</li>
          </ul>
        </div>
        <div class="resume-item">
          <h4>Social Media </h4>
         
          <p><em>Whatsapp,Instagram,Facebook,Telegram </em></p>
         
        </div>
      </div>
    </div>

  </div>
</section>
<!-- End Resume Section -->
@endsection