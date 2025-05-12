<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  <link rel="shortcut icon" href="{{ asset('image/img-1.png') }}" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>

  <header class="bg-body-tertiary min-vh-100 position-relative overflow-hidden">
    <img class="w-50 img-fluid position-absolute top-0 end-0 d-none d-sm-block"
      src="{{ asset('image/img-4-2000x2000.webp') }}" alt="Gambar"
      style="transform: translateY(-20%) translateX(30%);" loading="lazy">
    <div class="container px-custom pt-3">
      <nav class="navbar navbar-expand-lg bg-transparent text-uppercase">
        <div class="container-fluid column-gap-5 px-0">
          <a class="navbar-brand fs-3 fw-bold" href="/">Tasty Food</a>
          <button class="navbar-toggler bg-body-secondary" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="/tentang">Tentang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="/berita">berita</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="/galeri">Galeri</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="/kontak">Kontak</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="/testimonials">Testimonial</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <section class="hero-section py-5 mt-4">
        <div class="row aling-items-center">
          <div class="col-sm-9 d-flex flex-column col-lg-6 col-auto z-1">
            <div class="w-25 h-4 border border-black mb-4"></div>
            <h1 class="fw-light text-center text-sm-center text-lg-start">HEALTHY<br> <span class="fw-bold">TASTY
                FOOD</span></h1>
            <p>Lorem ipsum dolor sit amet consectetur,
              adipisicing elit. Odio ex iusto, ab
              libero inventore consectetur fugit consequuntur quisquam eveniet voluptatum asperiores unde
              commodi
              veritatis natus repellat? Rem laboriosam veniam sequi.</p>
            <button
              class="btn btn-dark px-4 py-2 col-lg-6 col-md-6 col-sm-7 col-12 align-self-sm-center align-self-md-start">
              <a href="/tentang" class="text-reset text-decoration-none fw-bold d-block">TENTANG KAMI</a>
            </button>
          </div>
        </div>
      </section>
    </div>
  </header>

  <main>
    <section class="container-lg tentang text-sm-center py-5">
      <div class="row justify-content-sm-center">
        <div class="col-sm-6 col-12 px-custom">
          <h1 class="fw-bold text-uppercase mb-sm-3 mb-4 text-center">Tentang Kami</h1>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque quam distinctio magnam alias,
            rerum harum,
            quasi
            atque labore officia provident molestias totam omnis maiores doloribus repellat amet aperiam
            nostrum libero!
          </p>
          <div class="w-25 h-4 border border-black mx-auto"></div>
        </div>
      </div>
    </section>

    <section class="food images justify-text" style="padding-block: 10.5rem">
      <div class="container px-custom">
        <div class="row justify-content-center column-gap-3 row-gap-lg-0">
          <div class="col-md-5 px-sm-0 col-lg col-sm-5 col-12">
            <div class="card h-100 shadow-sm rounded-3">
              <div class="card-img-wrapper">
                <img src="{{ asset('image/img-1.png') }}" class="card-img-top img-fluid" alt="food" loading="lazy">
              </div>
              <div class="card-body">
                <h4 class="card-title text-center fw-bold">LOREM IPSUM</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt adipisci eligendi
                  placeat nemo voluptatibus
              </div>
            </div>
          </div>
          <div class="col-md-5 px-sm-0 col-lg col-sm-5 col-12">
            <div class="card h-100 shadow-sm rounded-3">
              <div class="card-img-wrapper">
                <img src="{{ asset('image/img-2.png') }}" class="card-img-top img-fluid" alt="food" loading="lazy">
              </div>
              <div class="card-body">
                <h4 class="card-title text-center fw-bold">LOREM IPSUM</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt adipisci eligendi
                  placeat nemo voluptatibus</p>
              </div>
            </div>
          </div>
          <div class="col-md-5 px-sm-0 col-lg col-sm-5 col-12">
            <div class="card h-100 shadow-sm rounded-3">
              <div class="card-img-wrapper">
                <img src="{{ asset('image/img-3.png') }}" class="card-img-top img-fluid" alt="food"
                  loading="lazy">
              </div>
              <div class="card-body">
                <h4 class="card-title text-center fw-bold">LOREM IPSUM</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt adipisci eligendi
                  placeat nemo voluptatibus </p>
              </div>
            </div>
          </div>
          <div class="col-md-5 px-sm-0 col-lg col-sm-5 col-12">
            <div class="card h-100 shadow-sm rounded-3">
              <div class=" card-img-wrapper">
                <img src="{{ asset('image/img-4-2000x2000.webp') }}" class="card-img-top img-fluid" alt="food"
                  loading="lazy">
              </div>
              <div class="card-body">
                <h4 class="card-title text-center fw-bold">LOREM IPSUM</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt adipisci eligend
                  placeat nemo voluptatibus .</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="berita bg-body-tertiary pt-5" style="padding-bottom: 5rem">
      <div class="container px-custom">
        <h1 class="mb-5 fw-bold text-center">BERITA KAMI</h1>

        <div class="row g-4">
          <div class="col-12 col-lg-6 featured-article">
            <div class="card">
              <img src="{{ asset('storage/' . $newsLatestOne->image) }}" alt="{{ $newsLatestOne->title }}"
                class="card-img-top img-fluid flex-grow-1" loading="lazy">
              <div class="card-body">
                <h3 class="card-title justify-text fw-bold">{{ $newsLatestOne->title }}</h3>
                <p class="card-text justify-text"> {!! Str::limit(html_entity_decode($newsLatestOne->description), 100, '...', true) !!}</p>
                <div class="menu-link d-flex justify-content-between align-items-center mt-auto">
                  <a href="{{ route('berita.show', $newsLatestOne->slug) }}" class="more-link">Baca
                    selengkapnya »</a>
                  <i class="fa-solid fa-ellipsis fs-3 text-body-tertiary"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6">
            <div class="row g-4">
              @foreach ($newsLatest as $news)
                <div class="col-12 col-sm-6">
                  <div class="card">
                    <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}"
                      class="card-img-top img-fluid" loading="lazy">
                    <div class="card-body">
                      <h5 class="card-title fw-bold">{{ $news->title }}</h5>
                      <p class="card-text justify-text">{!! Str::limit(html_entity_decode($news->description), 100, '...', true) !!}</p>
                      <div class="menu-link d-flex justify-content-between align-items-center mt-auto">
                        <a href="{{ route('berita.show', $news->slug) }}" class="more-link">Baca selengkapnya »</a>
                        <i class="fa-solid fa-ellipsis fs-3 text-body-tertiary"></i>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach

            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="gallery py-5">
      <div class="container px-custom">
        <h1 class="mb-5 fw-bold text-center">GALERI KAMI</h1>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 justify-content-center">
          @foreach ($galleries as $galleri)
            <div class="col">
              <div class="rounded-4 shadow-sm overflow-hidden gallery-item" style="aspect-ratio: 1/1;">
                <img src="{{ asset('storage/' . $galleri->image) }}" alt="{{ $galleri->title }}"
                  class="img-fluid w-100 h-100" loading="lazy">
              </div>
            </div>
          @endforeach
        </div>

        <div class="row mt-5">
          <button class="btn btn-dark col-lg-3 col-sm-6 col-auto py-2 mx-auto fw-bold">
            <a href="/galeri" class="text-reset text-decoration-none d-block"> LIHAT LEBIH BANYAK</a>
          </button>
        </div>
      </div>
    </section>

    <section class="ulasan bg-light-subtle border-top pb-4">
      <div class="container pt-4 pb-5 position-relative px-custom">
        <h2 class="text-center mb-4">Ulasan kami</h2>
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            @foreach ($testimonials as $testimonial)
              <div class="swiper-slide">
                <div class="card shadow-sm">
                  <div class="card-header d-flex align-items-center gap-2">
                    <img src="{{ asset('storage/' . $testimonial->image) }}"
                      class="card-img-top img-fluid  rounded-circle" alt="..."
                      style="width: 80px; height: 80px;" alt="testimonial image">
                    <h5>{{ $testimonial->name }}</h5>
                  </div>
                  <div class="card-body d-flex flex-column">
                    <p class="card-text">{{ $testimonial->comment }}</p>

                    <div class="rating d-flex justify-content-between align-items-center gap-1 text-warning mt-auto">
                      <div class="star">
                        @for ($i = 1; $i <= $testimonial->rating; $i++)
                          <i class="fa-solid fa-star "></i>
                        @endfor
                      </div>

                      <div
                        class="quote-icon  d-flex bg-body-secondary
                                       justify-content-center align-items-center rounded-circle text-dark"
                        style="width: 40px; height: 40px;">
                        <i class="fa-solid fa-quote-left" style=" font-size: 24px;"></i>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
        <div class="swiper-pagination fixed-bottom"></div>
      </div>
      <div class="container">
        <div class="row my-3 position-relative">
          <button class="btn btn-dark col-lg-3 col-sm-6 col-auto py-2 mx-auto fw-bold">
            <a href="/testimonials" class="text-reset text-decoration-none d-block">BERI KAMI ULASAN</a>
          </button>
        </div>
      </div>
    </section>
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
          <div class="col-md-12 col-lg-3 col-sm-6 col-12">
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      freeMode: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        576: {
          slidesPerView: 2
        },
        992: {
          slidesPerView: 3
        }
      }
    });
  </script>
  <script>
    function setEqualCardHeights() {
      const cards = document.querySelectorAll('.swiper-slide .card');
      let maxHeight = 0;

      // Reset height dulu agar bisa hitung ulang kalau resize
      cards.forEach(card => {
        card.style.height = 'auto';
      });

      // Cari tinggi tertinggi
      cards.forEach(card => {
        if (card.offsetHeight > maxHeight) {
          maxHeight = card.offsetHeight;
        }
      });

      // Set semua card ke tinggi yang sama
      cards.forEach(card => {
        card.style.height = maxHeight + 'px';
      });
    }

    // Jalankan saat halaman selesai dimuat
    window.addEventListener('load', setEqualCardHeights);
    // Jalankan lagi saat resize window
    window.addEventListener('resize', setEqualCardHeights);
  </script>
</body>

</html>
