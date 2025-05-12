@extends('layouts.app')

@section('title-page')
Berita
@endsection

@section('title-header')
Berita Kami
@endsection

@section('content')
<div class="container px-custom py-5">
    <div class="row column-gap-3 row-gap-4">
        <div class="col-12">
            <img src="{{asset('storage/' . $news->image)}}" alt=alt="{{ $news->title }}"
                class="img-fluid w-100 rounded-4 shadow-sm" style="max-height:400px; min-height:300px;">
        </div>
        <div class="col-12 justify-text">
            <div class="text-news">
                <h1 class="text-center">{{$news->title}}</h1>
                <p>{!! $news->description !!}</p>
            </div>
        </div>
    </div>
</div>
@endsection