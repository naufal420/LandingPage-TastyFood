@extends('layouts.app')

@section('title-page')
  Kontak
@endsection

@section('title-header')
  Kontak Kami
@endsection

@section('content')
  <div class="container pt-5 mb-3 px-custom">
    <h3 class="fw-bold mb-3 text-md-start text-center">KONTAK KAMI</h3>
    <form class="pt-3" method="POST" action="{{ route('contact.store') }}">
      @csrf
      <div class="row row-cols-md-2 row-cols-1 mb-4 align-items-stretch">
        <div class="col mb-md-0 mb-4">
          <div class="form-floating mb-3">
            <input type="text" class="form-control border-dark-subtle" id="floatingInput" placeholder="Subject"
              name="subject" required>
            <label for="floatingInput">Subject</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control border-dark-subtle" id="floatingInput" placeholder="Name"
              name="name" required>
            <label for="floatingInput">Name</label>
          </div>
          <div class="form-floating">
            <input type="email" class="form-control border-dark-subtle" id="floatingInput" placeholder="Email"
              name="email" required>
            <label for="floatingInput">Email</label>
          </div>
        </div>
        <div class="col">
          <textarea class="form-control pt-3 border-dark-subtle h-100" id="exampleFormControlTextarea1" rows="3"
            placeholder="Message" name="message" required></textarea>
        </div>
      </div>
      <button type="submit" class="btn btn-dark py-3 w-100 fw-bold">KIRIM</button>
    </form>
    <div class="contact-icon py-5 text-center">
      <div class="row row-cols-md-3 row-cols-1 mt-3 row-gap-4">
        <div class="col">
          <div class="img-icon" style="justify-self: center">
            <img class="img-fluid mb-3" src="{{ asset('image/Group 66.png') }}" alt="Gambar gmail"
              style="max-width: 70px">
            <h5 class="fw-bold">EMAIL</h5>
            <p>{{ $contact->email }}</p>
          </div>
        </div>
        <div class="col">
          <div class="img-icon " style="justify-self: center">
            <img class="img-fluid mb-3" src="{{ asset('image/Group 67.png') }}" alt="Gambar gmail"
              style="max-width: 70px">
            <h5 class="fw-bold">PHONE</h5>
            <p>{{ $contact->phone }}</p>
          </div>
        </div>
        <div class="col">
          <div class="img-icon" style="justify-self: center">
            <img class="img-fluid mb-3" src="{{ asset('image/Group 68.png') }}" alt="Gambar gmail"
              style="max-width: 70px">
            <h5 class="fw-bold">LOCATION</h5>
            <p>{{ $contact->location }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="maps py-5 bg-body-tertiary">
    <div class="container py-3 px-custom">
      <div id="map" style="height: 400px;" class="rounded-3"></div>
    </div>
  </div>
@endsection

@section('scripts')
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
    });
  </script>

  <script>
    // Inisialisasi map
    var map = L.map('map').setView([{{ $contact->latitude }}, {{ $contact->longitude }}], 13);

    // Tambahkan tile layer OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 19,
      attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    // Tambahkan marker
    L.marker([{{ $contact->latitude }}, {{ $contact->longitude }}])
      .addTo(map)
      .bindPopup('{{ $contact->location }}');
  </script>
@endsection
