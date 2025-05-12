@extends('layouts.app')

@section('title-page')
Berita
@endsection

@section('title-header')
Berita Kami
@endsection

@section('content')
<div class="berita py-5 bg-body-tertiary">
    <div class="container px-custom py-md-5 py-2">
        <div class="row row-cols-md-2 row-cols-1 flex-md-row row-gap-4">
            <div class="col" style="max-height: 500px;">
                <div class="image-tasty-food h-100">
                    <img src="{{asset('storage/'. $newsRandom->image)}}" alt="img-tasty-food"
                        class="img-fluid w-100 h-100 rounded-4">
                </div>
            </div>

            <div class="col ps-md-4">
                <div class="text-berita d-flex flex-column justify-content-center h-100 row-gap-2">
                    <h3 class="fw-bold text-uppercase mb-3 text-center text-sm-start">{{$newsRandom->title}}
                    </h3>
                    <p class="justify-text">
                        {!! Str::limit(html_entity_decode($newsRandom->description), 200, '...', true) !!}
                    </p>
                    <p class="justify-text">
                        {!! Str::limit(html_entity_decode($newsRandom->description), 200, '...', true) !!}
                    </p>
                    <button class="btn p-3 btn-dark rounded-0 text-white align-self-start mx-md-0 mx-auto fw-bold">
                        <a href="{{route('berita.show',$newsRandom->slug)}}"
                            class="text-reset text-decoration-none d-block"> BACA SELENGKAPNYA</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="berita-lainnya py-5">
    <div class="container pt-0 px-custom">
        <h3 class="fw-bold mb-5 text-center text-md-start">BERITA LAINNYA</h3>
        <div
            class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 row-cols-1 row-gap-4 mb-5">
            @foreach ($news as $new)
            <div class="col">
                <div class="card">
                    <img src="{{asset('storage/' .$new->image)}}" alt="{{$new->title}}" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{$new->title}}</h5>
                        <p class="justify-text">
                            {!! Str::limit(html_entity_decode($new->description), 100, '...', true) !!}
                        </p>
                        <div class="menu-link d-flex justify-content-between align-items-center">
                            <a href="{{ route('berita.show', $new->slug) }}" class="more-link">Baca selengkapnya »</a>
                            <i class="fa-solid fa-ellipsis fs-3 text-body-tertiary"></i>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="pagination d-flex justify-content-end">
            {{$news->links()}}
        </div>
    </div>

</div>
@endsection