@extends('layouts.app')

@section('title-page')
  Testimonials
@endsection

@section('title-header')
  Testimonials
@endsection

@section('content')
<div class="ulasan bg-light-subtle border-bottom pb-3">
  <div class="container py-5 position-relative px-custom">
    <h2 class="text-center mb-4">Beri kami ulasan</h2>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        @foreach ($testimonials as $testimonial)
          <div class="swiper-slide">
            <div class="card shadow-sm">
              <div class="card-header d-flex align-items-center gap-2">
                <img src="{{ asset('storage/' . $testimonial->image) }}" class="card-img-top img-fluid  rounded-circle"
                  alt="..." style="width: 80px; height: 80px;" alt="testimonial image">
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
</div>

  <div class="container py-4 px-custom">
    <form class="mb-4" method="POST" action="{{ route('testimonials.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="row row-cols-md-2 row-cols-1 mb-2 align-items-stretch">
        <div class="col mb-md-0 mb-3">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control border-dark-subtle" id="name" placeholder="Yourname"
              name="name" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control border-dark-subtle" id="email" placeholder="Email@gmail.com"
              name="email" required>
          </div>
          <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control border-dark-subtle" id="image" name="image" required>
          </div>
          <div>
            <label class="form-label">Rating</label>
            <div class="star-rating d-flex flex-row-reverse justify-content-end gap-1">
              <input type="radio" id="star5" name="rating" value="5" required />
              <label for="star5"><i class="fa-solid fa-star"></i></label>

              <input type="radio" id="star4" name="rating" value="4" />
              <label for="star4"><i class="fa-solid fa-star"></i></label>

              <input type="radio" id="star3" name="rating" value="3" />
              <label for="star3"><i class="fa-solid fa-star"></i></label>

              <input type="radio" id="star2" name="rating" value="2" />
              <label for="star2"><i class="fa-solid fa-star"></i></label>

              <input type="radio" id="star1" name="rating" value="1" />
              <label for="star1"><i class="fa-solid fa-star"></i></label>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <label for="comment" class="form-label">Comment</label>
          <textarea class="form-control border-dark-subtle h-100" id="comment" placeholder="Berikan comentar anda"
            name="comment" required></textarea>
        </div>
      </div>
      <button type="submit" class="btn btn-dark py-3 w-100 fw-bold mt-4">KIRIM</button>
    </form>
  </div>
@endsection

@section('scripts')
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
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      @if (session('success'))
        Swal.fire({
          icon: 'success',
          title: 'Sukses!',
          text: '{{ session('success') }}',
          ConfirmButtonText: 'OK'
        });
      @endif
      @if (session('error'))
        Swal.fire({
          icon: 'error',
          title: 'Gagal!',
          text: '{{ session('error') }}',
          confirmButtonText: 'OK'
        });
      @endif

      @if ($errors->any())
        Swal.fire({
          icon: 'error',
          title: 'Ulasan gagal tersimpan!',
          text: 'Ukuran file terlalu besar',
          confirmButtonText: 'OK'
        });
      @endif
    });
  </script>
@endsection
