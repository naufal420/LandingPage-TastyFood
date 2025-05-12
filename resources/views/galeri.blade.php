@extends('layouts.app')


@section('title-page')
  Galeri
@endsection

@section('title-header')
  Galeri Kami
@endsection

@section('content')
  <div class="image-slider py-5 bg-body-tertiary">
    <div class="container py-4 px-custom">
      <div id="carouselExampleAutoplaying" class="carousel slide rounded-4" data-bs-ride="carousel" style="height: 400px">
        <div class="carousel-inner h-100 rounded-4" data-bs-interval="3000">
          @foreach ($galleries_sliders as $galleries_slider)
            <div class="carousel-item active h-100 ">
              <img src="{{ asset('storage/' . $galleries_slider->image) }}" class="d-block w-100 img-fluid h-100 shadow-sm"
                alt="image-slider" loading="lazy">
            </div>
          @endforeach
        </div>
        <button class="carousel-control-prev opacity-100 justify-content-start" type="button"
          data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <div class="icon bg-white text-black d-flex justify-content-center align-items-center shadow"
            style="width: 50px; height: 50px; border-radius: 50%; margin-left: -20px">
            <i class="fas fa-angle-left fs-3"></i>
            <span class="visually-hidden">Previous</span>
          </div>
        </button>
        <button class="carousel-control-next opacity-100 justify-content-end" type="button"
          data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <div class="icon bg-white text-black d-flex justify-content-center align-items-center shadow" aria-hidden="true"
            style="width: 50px; height: 50px; border-radius: 50%; margin-right: -20px">
            <i class="fas fa-angle-right fs-3"></i>
            <span class="visually-hidden">Next</span>
          </div>
        </button>
      </div>
    </div>
  </div>

  <div class="gallery py-5">
    <div class="container pt-4 px-custom">
      <div class="row mb-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 row-gap-sm-3 row-gap-4">
        @foreach ($galleries as $gallery)
          <div class="col">
            <div class="rounded-4 shadow-sm overflow-hidden gallery-item" style="aspect-ratio: 1/1;">
              <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}"
                class="img-fluid w-100 h-100" loading="lazy">
            </div>
          </div>
        @endforeach
      </div>
      <div class="pagination d-flex justify-content-end">
        {{ $galleries->links() }}
      </div>
    </div>
  </div>
@endsection
