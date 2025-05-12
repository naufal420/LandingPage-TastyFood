@extends('layouts.app')


@section('title-page')
    Tentang
@endsection

@section('title-header')
    Tentang Kami
@endsection

@section('content')
    <div class="tasty-food py-5 bg-body-tertiary">
        <div class="container px-custom pt-lg-5 pt-md-4 pt-3 pb-5">
            <div class="row align-items-center align-items-lg-start">
                <div class="col-lg col-md-5 mb-sm-0 mb-2">
                    <div class="tasty-food-text h-100 d-flex flex-column justify-content-center pe-md-3 pe-lg-4">
                        <h2 class="fw-bold text-center text-lg-start mb-4">TASTY FOOD</h2>
                        <p class="fw-bold justify-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur
                            fugit exercitationem repellat, iure quam odio autem ipsam quidem aliquam eveniet consectetur
                            quaerat mollitia est quod temporibus assumenda architecto alias omnis?</p>
                        <p class="justify-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam,
                            voluptates, architecto neque suscipit ab, ex commodi repellat error labore cumque nam
                            dignissimos dicta vel rerum aperiam alias iusto distinctio natus.</p>
                    </div>
                </div>
                <div class="col-lg col-md-7">
                    <div class="row row-cols-2">
                        <div class="col">
                            <div class="image-tasty-food h-100">
                                <img src="{{ asset('image/brooke-lark-oaz0raysASk-unsplash.webp') }}" alt="image-tasty-food"
                                    class="img-fluid rounded-4 h-100 shadow-sm">
                            </div>
                        </div>
                        <div class="col">
                            <div class="image-tasty-food h-100">
                                <img src="{{ asset('image/sebastian-coman-photography-eBmyH7oO5wY-unsplash.webp') }}"
                                    alt="image-tasty-food" class="img-fluid rounded-4 h-100 shadow-sm">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="visi-tasty-food py-5">
        <div class="container px-custom pt-md-5 pt-4">
            <div class="row flex-row-reverse align-items-center align-items-lg-start">
                <div class="col-lg col-md-5 mb-sm-0 mb-2">
                    <div class="visi-text ps-md-2 ps-lg-3 pt-lg-4">
                        <h2 class="fw-bold text-center text-lg-start mb-4 mt-lg-2">VISI</h2>
                        <p class="justify-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam,
                            voluptates, architecto neque suscipit ab, ex commodi repellat error labore cumque nam
                            dignissimos dicta vel rerum aperiam alias iusto distinctio natus.
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum, ullam debitis possimus
                            laboriosam, beatae modi dolor porro illum magni ad dolore. Aperiam a cumque itaque voluptatibus
                            quidem quia quasi ratione.</p>
                    </div>
                </div>
                <div class="col-lg col-md-7">
                    <div class="row row-cols-2">
                        <div class="col">
                            <div class="image-tasty-food h-100">
                                <img src="{{ asset('image/fathul-abrar-T-qI_MI2EMA-unsplash.webp') }}"
                                    alt="image-visi-tasty-food" class="img-fluid rounded-4 w-100 h-100 shadow-sm"
                                    style="max-height: 300px">
                            </div>
                        </div>
                        <div class="col">
                            <div class="image-tasty-food h-100">
                                <img src="{{ asset('image/michele-blackwell-rAyCBQTH7ws-unsplash.webp') }}"
                                    alt="image-visi-tasty-food" class="img-fluid rounded-4 w-100 h-100 shadow-sm"
                                    style="max-height: 300px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="misi-tasty-food py-md-5 pt-4 pb-5 mb-4">
        <div class="container px-custom">
            <div class="row align-items-center align-items-lg-start">
                <div class="col-lg col-md-6 mb-sm-0 mb-2">
                    <div class="misi-text pt-lg-4 pe-md-4">
                        <h2 class="fw-bold text-center text-lg-start mb-4">MISI</h2>
                        <p class="justify-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam,
                            voluptates, architecto neque suscipit ab, ex commodi repellat error labore cumque nam
                            dignissimos dicta vel rerum aperiam alias iusto distinctio natus.
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum, ullam debitis possimus
                            laboriosam, beatae modi dolor porro illum magni ad dolore. Aperiam a cumque itaque voluptatibus
                            quidem quia quasi ratione.</p>
                    </div>
                </div>
                <div class="col-lg col-md-6">
                    <div class="image-tasty-food">
                        <img src="{{ asset('image/sanket-shah-SVA7TyHxojY-unsplash.webp') }}" alt="image-tasty-food"
                            class="img-fluid rounded-4 w-100 shadow-sm" style="height: 300px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
