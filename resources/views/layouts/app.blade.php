<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title-page')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
  <link rel="shortcut icon" href="{{ asset('image/img-1.png') }}" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
</head>

<body>
  <header class="bg-img-header pb-3 pb-lg-0  text-uppercase text-white">
    <div class="container px-custom pt-4">
      <nav class="navbar navbar-expand-lg bg-transparent pb-4 pb-sm-3">
        <div class="container-fluid p-0">
          <a class="navbar-brand text-reset h1 m-0 p-0 fs-4 fw-bold" href="#">Tastyfood</a>
          <button class="navbar-toggler bg-body-tertiary" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav gap-3 align-items-center">
              <li class="nav-item">
                <a class="nav-link active text-reset" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-reset" href="/tentang">Tentang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-reset" href="/berita">Berita</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-reset" href="/galeri">Galeri</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-reset" href="/kontak">Kontak</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-reset" href="/testimonials">Testimonials</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="title-header position-relative z-1 py-5 mt-lg-4 mt-3">
        <h1 class="fw-bold">@yield('title-header')</h1>
      </div>
    </div>
  </header>

  <main>
    @yield('content')
  </main>

 <footer class="text-center text-lg-start bg-dark text-muted py-5">
        <section class="footer mt-3">
            <div class="container px-custom">
                <div class="row text-start gy-sm-5 gy-4 gx-5  text-white align-items-baseline">
                    <div class="col-md-4 col-lg-3 col-sm-6 col-12">
                        <h3 class="fw-bold mb-4">
                            Tasty Food
                        </h3>
                        <p class="text-white-50">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere maiores error atque
                            expedita recusandae
                            labore sit perferendis sint, beatae numquam voluptatibus eum iusto, nihil corporis fugit
                            cupiditate iste
                            cumque delectus!
                        </p>
                    </div>

                    <div class="col-md-4 col-lg-3 col-sm-6 col-12">
                        <h4 class="fw-bold mb-4">
                            Useful links
                        </h4>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none fw-bold">Blog</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none fw-bold">Hewan</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none fw-bold">Galeri</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none fw-bold">Testimonial</a>
                        </p>
                    </div>

                    <div class="col-md-4 col-lg-3 col-sm-6 col-12">
                        <h4 class="fw-bold mb-4">
                            Privacy
                        </h4>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none fw-bold">Karir</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none fw-bold">Tentang Kami</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none fw-bold">Kontak Kami</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset text-decoration-none fw-bold">Service</a>
                        </p>
                    </div>
                    <div
                        class="col-md-12 col-lg-3 col-sm-6 col-12">
                        <h4 class="fw-bold mb-4">Contact Info</h4>
                        <p class="fw-bold d-flex d-md-block flex-column row-gap-2">
                            <i class="fas fa-envelope me-sm-3"></i>
                            tastyfood@gmail.com
                        </p>
                        <p class="fw-bold d-flex d-md-block flex-column row-gap-2"><i
                                class="fas fa-phone me-sm-3"></i>+6281234567890</p>
                        <p class="fw-bold d-flex d-md-block flex-column row-gap-2"><i
                                class="fa-solid fa-location-dot me-sm-3"></i>
                            Kota Bandung, Jawa Barat</p>
                    </div>
                </div>
                <div class="menu-icon mt-lg-2 mt-xl-0 d-flex gap-2">
                    <div class="icon">
                        <img src="{{ asset('image/001-facebook.png') }}" alt="facebook" style="width: 3rem;">
                    </div>
                    <div class="icon">
                        <img src="{{ asset('image/002-twitter.png') }}" alt="instagram" style="width: 3rem;">
                    </div>
                </div>
                <div class="copyright text-center text-white-50 pt-4">Copyright ©2023 All rights reserved</div>
            </div>
        </section>
    </footer>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  @yield('scripts')
</body>

</html>
