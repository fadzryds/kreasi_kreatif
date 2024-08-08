@php
$site_name = get_settings_value('_site_name');
$jumbotron = get_sections_data('JUMBOTRON');
$location = get_settings_value('_location');
$email = get_settings_value('_Email');
$about = get_sections_data('ABOUT');
$partner = get_partners();
$host = get_lives('HOST');
$studio = get_lives('STUDIO');
@endphp
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{$site_name}}</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
  </head>
  <body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-danger text-uppercase fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="#page-top">{{$site_name}}</a>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#partner">Partner</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#profile">Profile</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead bg-danger text-white text-center">
      <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar mb-5" src={{Storage::url($jumbotron->thumbnail)}} alt="..." />
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">{{$jumbotron->title}}</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
          <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0">{!! strip_tags($jumbotron->content) !!}</p>
      </div>
    </header>
    <!-- Partner Section-->
    <section class="page-section portfolio" id="partner">
        <!-- Partner Grid Items-->
        <div class="row justify-content-center">
          @php
              $i=1;
          @endphp
          @foreach ($partner as $item)
          <!-- Partner Item {{ $i }}-->
          <div class="col-md-1 col-lg-1 mb-1">
            <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $i }}">
              <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-10 w-10">
                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-0x"></i></div>
              </div>
              <img class="img-fluid" src="{{ Storage::url($item->thumbnail) }}" alt="..." />
            </div>
          </div>
          <!-- last partner {{ $i }}-->
          @php
            $i++;
          @endphp
          @endforeach
        </div>
      </div>
    </section>
    <!-- About Section-->
    <section class="page-section bg-warning text-white mb-0" id="about">
      <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">{{ $about->title }}</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
          <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
          <div class="col-lg-5 ms-auto text-center"><img src="{{ Storage::url($about->thumbnail) }}" class="w-75" /></div>
          <div class="col-lg-5 me-auto lead">
            {!! $about->content !!}
          </div>
        </div>
      </div>
    </section>
    <!-- layanan kami -->
    <br> <br>
    <div class="container">
      <h5>Layanan Kami</h5>
      <br>
      <h1>Apa Yang Kami Lakukan Untuk Bisnis Kamu</h1>
      <br>
      <div class="services">
          <div class="service">
              <img src="assets\img\tiktok1.png" alt="Tiktok Shop Partner">
              <h3>Tiktok Shop Partner</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="service">
              <img src="assets\img\boost.png" alt="Strategi Boost Penjualan">
              <h3>Strategi Boost Penjualan</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="service">
              <img src="assets\img\profesional.png" alt="Studio Profesional">
              <h3>Studio Profesional</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="service">
              <img src="assets\img\grup.png" alt="Host Berpengalaman">
              <h3>Host Berpengalaman</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="service">
              <img src="assets\img\analisa.png" alt="Analisa & Monitoring">
              <h3>Analisa & Monitoring</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="service">
              <img src="assets\img\persen.png" alt="Harga Layanan Kompetitif">
              <h3>Harga Layanan Kompetitif</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
      </div>
  </div>
  <!-- host & studio -->
  <div class="host-studio-container">
    <div class="judul">Kelebihan Yang Kami Miliki</div>
    <div class="button-container">
        <button class="button">Talent</button>
        <button class="button right-button">Studio</button>
    </div>
    @php
      $f = 1;
    @endphp
    @foreach ($host as $id)
        <div class="profiles">
            <div class="profile-card">
                <img src="{{ Storage::url($id->thumbnail) }}" alt="...">
                <div class="name">{{ $id->title }}</div>
                <div class="age">{{ $id->content }}</div>
            </div>
        </div>
        @php 
      $f++; 
    @endphp
  @endforeach
  </div>
</div>
<!-- price -->
<div class="penawaran-container">
  <div class="judul">Dapatkan Penawaran Terbaik</div>
  <div class="cards">
      <div class="card">
          <div class="card-header">
              <div class="durasi">1 Bulan</div>
          </div>
          <div class="card-body">
              <div class="harga">6jt <span>/ Bulan</span></div>
              <div class="deskripsi">We Are The Brilliants In Terms Of Digital Market. Let The Whole World Know About Small.</div>
              <ul class="features">
                  <li>Live 20 Hari/Bulan</li>
                  <li>Seo Live 2 Jam/Hari</li>
                  <li>Lagoon Live Setiap Bulan</li>
                  <li>1 Host Live</li>
                  <li>1 Operator</li>
                  <li>Set Studio Live</li>
              </ul>
              <button class="pesan-button">Pesan Sekarang</button>
          </div>
      </div>
      <div class="card">
          <div class="card-header">
              <div class="durasi">3 Bulan</div>
          </div>
          <div class="card-body">
              <div class="harga">12jt <span>/ Bulan</span></div>
              <div class="deskripsi">We Are The Brilliants In Terms Of Digital Market. Let The Whole World Know About Small.</div>
              <ul class="features">
                  <li>Live 20 Hari/Bulan</li>
                  <li>Seo Live 2 Jam/Hari</li>
                  <li>Lagoon Live Setiap Bulan</li>
                  <li>1 Host Live</li>
                  <li>1 Operator</li>
                  <li>Set Studio Live</li>
              </ul>
              <button class="pesan-button">Pesan Sekarang</button>
          </div>
      </div>
      <div class="card">
          <div class="card-header">
              <div class="durasi">6 Bulan</div>
          </div>
          <div class="card-body">
              <div class="harga">24jt <span>/ Bulan</span></div>
              <div class="deskripsi">We Are The Brilliants In Terms Of Digital Market. Let The Whole World Know About Small.</div>
              <ul class="features">
                  <li>Live 20 Hari/Bulan</li>
                  <li>Seo Live 2 Jam/Hari</li>
                  <li>Lagoon Live Setiap Bulan</li>
                  <li>1 Host Live</li>
                  <li>1 Operator</li>
                  <li>Set Studio Live</li>
              </ul>
              <button class="pesan-button">Pesan Sekarang</button>
          </div>
      </div>
  </div>
  <div class="summary">
      <p>
          "Kami dapat memberikan <span class="highlight">layanan one stop solution</span> yang komprehensif dan mendalam kepada klien kami, memastikan bahwa setiap aspek dari livestreaming mereka dikelola dengan <span class="highlight">profesionalisme dan keahlian yang tinggi</span>, sehingga menghasilkan pengalaman <span class="highlight">livestream terbaik</span>."
      </p>
      <div class="stats">
          <div class="stat">
              <div class="number">172jt</div>
              <div class="label">Penjualan Per Bulan</div>
          </div>
          <div class="stat">
              <div class="number">53</div>
              <div class="label">Klien</div>
          </div>
          <div class="stat">
              <div class="number">25</div>
              <div class="label">Host</div>
          </div>
          <div class="stat">
              <div class="number">15</div>
              <div class="label">Studio</div>
          </div>
      </div>
  </div>
</div>
<!-- contoh testimoni -->
<div class="live-shopping-container">
  <div class="judul-section">Live Shopping Terbaru Kami</div>
  <div class="video-grid">
      <div class="video-card">
          <img src="assets\img\live1.png" alt="Live Shopping Thumbnail">
          <div class="play-button"></div>
      </div>
      <div class="video-card">
          <img src="assets\img\live1.png" alt="Live Shopping Thumbnail">
          <div class="play-button"></div>
      </div>
      <div class="video-card">
          <img src="assets\img\live1.png" alt="Live Shopping Thumbnail">
          <div class="play-button"></div>
      </div>
      <div class="video-card">
          <img src="assets\img\live1.png" alt="Live Shopping Thumbnail">
          <div class="play-button"></div>
      </div>
  </div>
</div>

<div class="testimonial-container">
  <div class="judul-section">Our Clients Feedbacks</div>
  <div class="testimonial-grid">
      <div class="testimonial-card">
          <div class="client-photo"></div>
          <p>Vestibulum Accumsan Venena... <span>5 stars</span></p>
      </div>
      <div class="testimonial-card">
          <div class="client-photo"></div>
          <p>Consectetur Adipiscing...</p>
      </div>
      <div class="testimonial-card">
          <div class="client-photo"></div>
          <p>Vestibulum Accumsan Venena... <span>5 stars</span></p>
      </div>
      <div class="testimonial-card">
          <div class="client-photo"></div>
          <p>Supercedes Rinara Purus... <span>5 stars</span></p>
      </div>
      <div class="testimonial-card">
          <div class="client-photo"></div>
          <p>Vestibulum Accumsan Venena... <span>5 stars</span></p>
      </div>
      <div class="testimonial-card">
          <div class="client-photo"></div>
          <p>Supercedes Rinara Purus... <span>5 stars</span></p>
      </div>
  </div>
</div>
    <!-- Footer-->
    <footer class="footer text-center" id="profile">
      <div class="container">
        <div class="row">
          <!-- Footer Location-->
          <div class="col-lg-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Location</h4>
            <p class="lead mb-0">
            {{ $location }}
            </p>
          </div>
          <!-- Footer Social Icons-->
          <div class="col-lg-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Around the Web</h4>
            @if ($email) 
            <a class="btn btn-outline-light btn-social mx-1" href="{{ $email }}" target = "blank"><i class="            <a class="btn btn-outline-light btn-social mx-1" href="{{ $email }}" target = "blank"><i class="fa-solid fa-envelope"></i></a></i></a>
            @endif
        </div>
          <!-- Footer About Text-->
          <div class="col-lg-4">
            <h4 class="text-uppercase mb-4">About Freelancer</h4>
            <p class="lead mb-0">
              Freelance is a free to use, MIT licensed Bootstrap theme created by
              <a href="http://startbootstrap.com">Start Bootstrap</a>
              .
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
      <div class="container"><small>Copyright &copy; {{$site_name}}</small></div>
    </div>
    <!-- Partner Modals-->
    <!-- Partner Modal 1-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
          <div class="modal-body text-center pb-5">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <!-- Partner Modal - Title-->
                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Log Cabin</h2>
                  <!-- Icon Divider-->
                  <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                  </div>
                  <!-- Partner Modal - Image-->
                  <img class="img-fluid rounded mb-5" src="assets/img/partner/cabin.png" alt="..." />
                  <!-- Partner Modal - Text-->
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                  <button class="btn btn-primary" data-bs-dismiss="modal">
                    <i class="fas fa-xmark fa-fw"></i>
                    Close Window
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  </body>
</html>
