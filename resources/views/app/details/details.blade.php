@extends('layouts.app')
@section('title','Details')
@section('content')

<!-- main-area -->
<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('app/img/bg/breadcrumb_bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">Our <span> Movie</span></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Movie</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    @if(count($videouploader)>0)
    <!-- movie-area -->
    <section class="movie-area movie-bg" data-background="{{ asset('app/img/bg/movie_bg.jpg') }}">
        <div class="container">
            <div class="row align-items-end mb-60">
                <div class="col-lg-6">
                    <div class="section-title text-center text-lg-left">
                        <span class="sub-title">ONLINE STREAMING</span>
                        <h2 class="title">New Release Movies</h2>
                    </div>
                </div>
                <!-- <div class="col-lg-6">
                    <div class="movie-page-meta">
                        <div class="tr-movie-menu-active text-center">
                            <button class="active" data-filter="*">Animation</button>
                            <button class="" data-filter=".cat-one">Movies</button>
                            <button class="" data-filter=".cat-two">Romantic</button>
                        </div>
                        <form action="#" class="movie-filter-form">
                            <select class="custom-select">
                                <option selected>English</option>
                                <option value="1">Blueray</option>
                                <option value="2">4k Movie</option>
                                <option value="3">Hd Movie</option>
                            </select>
                        </form>
                    </div>
                </div> -->
            </div>
            <div class="row tr-movie-active">
                @foreach($videouploader as $vuk => $vuv)
                    <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                        <div class="movie-item movie-item-three mb-50">
                            <div class="movie-poster">
                                <img src="{{ asset('thumbUploads/'.$vuv->image) }}"alt="">
                                <ul class="overlay-btn">
                                    <li class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li><a href="{{ asset('videoUploads/'.$vuv->video) }}" class="popup-video btn">Watch Now</a></li>
                                    
                                    <li><a href="{{ route('movie.movieDetails',$vuv->id) }}" class="btn">Details</a></li>
                                </ul>
                            </div>
                            <div class="movie-content">
                                <div class="top">
                                    <h5 class="title"><a href="{{ route('movie.movieDetails',$vuv->id) }}">{{ $vuv->name }}</a></h5>
                                    <span class="date">{{ $vuv->year }}</span>
                                </div>
                                <div class="bottom">
                                    <ul>
                                        <li><span class="quality">hd</span></li>
                                        <li>
                                            <span class="duration"><i class="far fa-clock"></i>{{ $vuv->duration }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="pagination-wrap mt-30">
                        <nav>
                            {{ $videouploader->links('vendor.pagination.custom') }}
                            <!-- <ul>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">Next</a></li>
                            </ul> -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- movie-area-end -->
    @else
        <section class="movie-area movie-bg" data-background="{{ asset('app/img/bg/movie_bg.jpg') }}">
            <center>
                <h1>Coming Soon!</h1>
            </center>
        </section>
    @endif

</main>
<!-- main-area-end -->
@endsection