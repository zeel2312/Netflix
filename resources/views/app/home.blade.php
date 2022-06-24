@extends('layouts.app')
@section('title','Home')
@section('content')

<!-- main-area -->
<main>

    <!-- banner-area -->
    <section class="banner-area banner-bg" data-background="app/img/banner/banner_bg01.jpg">
        <div class="container custom-container">
            <div class="row">
                <div class="col-xl-6 col-lg-8">
                    <div class="banner-content">
                        <h6 class="sub-title wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.8s">Netflix</h6>
                        <h2 class="title wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1.8s">Unlimited <span>Movie</span>, TVs Shows, & More.</h2>
                        <div class="banner-meta wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1.8s">
                            <ul>
                                <li class="quality">
                                    <span>Pg 18</span>
                                    <span>hd</span>
                                </li>
                            </ul>
                        </div>
                        <a href="https://www.youtube.com/watch?v=vgnDpwsN0WA" class="banner-btn btn popup-video wow fadeInUp" data-wow-delay=".8s" data-wow-duration="1.8s"><i class="fas fa-play"></i> Watch Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-area-end -->

    <!-- up-coming-movie-area -->
    <section class="ucm-area ucm-bg" data-background="app/img/bg/ucm_bg.jpg">
        <div class="ucm-bg-shape" data-background="app/img/bg/ucm_bg_shape.png"></div>
        <div class="container">
            <div class="row align-items-end mb-55">
                <div class="col-lg-6">
                    <div class="section-title text-center text-lg-left">
                        <span class="sub-title">ONLINE STREAMING</span>
                        <h2 class="title">Upcoming Movies</h2>
                    </div>
                </div>
                <!-- <div class="col-lg-6">
                    <div class="ucm-nav-wrap">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="tvShow-tab" data-toggle="tab" href="#tvShow" role="tab" aria-controls="tvShow" aria-selected="true">TV Shows</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="movies-tab" data-toggle="tab" href="#movies" role="tab" aria-controls="movies" aria-selected="false">Movies</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="anime-tab" data-toggle="tab" href="#anime" role="tab" aria-controls="anime" aria-selected="false">Anime</a>
                            </li>
                        </ul>
                    </div>
                </div> -->
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tvShow" role="tabpanel" aria-labelledby="tvShow-tab">
                    <div class="ucm-active owl-carousel">
                        @foreach($videouploader as $vuk => $vuv)
                            <div class="movie-item mb-50">
                                <div class="movie-poster">
                                    <a href="movie-details.html"><img src="{{ asset('thumbUploads/'.$vuv->image) }}" alt=""></a>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="Javascript:;">{{ $vuv->name }}</a></h5>
                                        <span class="date">{{ $vuv->year }}</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">hd</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i> {{ $vuv->duration }}</span>
                                                <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- <div class="tab-pane fade" id="movies" role="tabpanel" aria-labelledby="movies-tab">
                    <div class="ucm-active owl-carousel">
                        <div class="movie-item mb-50">
                            <div class="movie-poster">
                                <a href="movie-details.html"><img src="app/img/poster/ucm_poster05.jpg" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="top">
                                    <h5 class="title"><a href="movie-details.html">The Cooking</a></h5>
                                    <span class="date">2021</span>
                                </div>
                                <div class="bottom">
                                    <ul>
                                        <li><span class="quality">hd</span></li>
                                        <li>
                                            <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                            <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="movie-item mb-50">
                            <div class="movie-poster">
                                <a href="movie-details.html"><img src="app/img/poster/ucm_poster06.jpg" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="top">
                                    <h5 class="title"><a href="movie-details.html">The Hikers</a></h5>
                                    <span class="date">2021</span>
                                </div>
                                <div class="bottom">
                                    <ul>
                                        <li><span class="quality">4k</span></li>
                                        <li>
                                            <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                            <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="movie-item mb-50">
                            <div class="movie-poster">
                                <a href="movie-details.html"><img src="app/img/poster/ucm_poster07.jpg" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="top">
                                    <h5 class="title"><a href="movie-details.html">Life Quotes</a></h5>
                                    <span class="date">2021</span>
                                </div>
                                <div class="bottom">
                                    <ul>
                                        <li><span class="quality">hd</span></li>
                                        <li>
                                            <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                            <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="movie-item mb-50">
                            <div class="movie-poster">
                                <a href="movie-details.html"><img src="app/img/poster/ucm_poster08.jpg" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="top">
                                    <h5 class="title"><a href="movie-details.html">The Beachball</a></h5>
                                    <span class="date">2021</span>
                                </div>
                                <div class="bottom">
                                    <ul>
                                        <li><span class="quality">4k</span></li>
                                        <li>
                                            <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                            <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="movie-item mb-50">
                            <div class="movie-poster">
                                <a href="movie-details.html"><img src="app/img/poster/ucm_poster03.jpg" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="top">
                                    <h5 class="title"><a href="movie-details.html">The Dog Woof</a></h5>
                                    <span class="date">2021</span>
                                </div>
                                <div class="bottom">
                                    <ul>
                                        <li><span class="quality">hd</span></li>
                                        <li>
                                            <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                            <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="anime" role="tabpanel" aria-labelledby="anime-tab">
                    <div class="ucm-active owl-carousel">
                        <div class="movie-item mb-50">
                            <div class="movie-poster">
                                <a href="movie-details.html"><img src="app/img/poster/ucm_poster01.jpg" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="top">
                                    <h5 class="title"><a href="movie-details.html">Women's Day</a></h5>
                                    <span class="date">2021</span>
                                </div>
                                <div class="bottom">
                                    <ul>
                                        <li><span class="quality">hd</span></li>
                                        <li>
                                            <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                            <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="movie-item mb-50">
                            <div class="movie-poster">
                                <a href="movie-details.html"><img src="app/img/poster/ucm_poster02.jpg" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="top">
                                    <h5 class="title"><a href="movie-details.html">The Perfect Match</a></h5>
                                    <span class="date">2021</span>
                                </div>
                                <div class="bottom">
                                    <ul>
                                        <li><span class="quality">4k</span></li>
                                        <li>
                                            <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                            <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="movie-item mb-50">
                            <div class="movie-poster">
                                <a href="movie-details.html"><img src="app/img/poster/ucm_poster03.jpg" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="top">
                                    <h5 class="title"><a href="movie-details.html">The Dog Woof</a></h5>
                                    <span class="date">2021</span>
                                </div>
                                <div class="bottom">
                                    <ul>
                                        <li><span class="quality">hd</span></li>
                                        <li>
                                            <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                            <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="movie-item mb-50">
                            <div class="movie-poster">
                                <a href="movie-details.html"><img src="app/img/poster/ucm_poster04.jpg" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="top">
                                    <h5 class="title"><a href="movie-details.html">The Easy Reach</a></h5>
                                    <span class="date">2021</span>
                                </div>
                                <div class="bottom">
                                    <ul>
                                        <li><span class="quality">8k</span></li>
                                        <li>
                                            <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                            <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="movie-item mb-50">
                            <div class="movie-poster">
                                <a href="movie-details.html"><img src="app/img/poster/ucm_poster05.jpg" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="top">
                                    <h5 class="title"><a href="movie-details.html">The Cooking</a></h5>
                                    <span class="date">2021</span>
                                </div>
                                <div class="bottom">
                                    <ul>
                                        <li><span class="quality">hd</span></li>
                                        <li>
                                            <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                            <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- up-coming-movie-area-end -->

    <!-- services-area -->
    <section class="services-area services-bg" data-background="app/img/bg/services_bg.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="services-img-wrap">
                        <img src="app/img/images/services_img.jpg" alt="">
                        <!-- <a href="app/img/images/services_img.jpg" class="download-btn" download>Download <img src="app/fonts/download.svg" alt=""></a> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="services-content-wrap">
                        <div class="section-title title-style-two mb-20">
                            <span class="sub-title">Our Services</span>
                            <h2 class="title">Download Your Shows Watch Offline.</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consecetur adipiscing elseddo eiusmod tempor.There are many variations of passages of lorem
                        Ipsum available, but the majority have suffered alteration in some injected humour.</p>
                        <div class="services-list">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="flaticon-television"></i>
                                    </div>
                                    <div class="content">
                                        <h5>Enjoy on Your TV.</h5>
                                        <p>Lorem ipsum dolor sit amet, consecetur adipiscing elit, sed do eiusmod tempor.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="flaticon-video-camera"></i>
                                    </div>
                                    <div class="content">
                                        <h5>Watch Everywhere.</h5>
                                        <p>Lorem ipsum dolor sit amet, consecetur adipiscing elit, sed do eiusmod tempor.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services-area-end -->

    <!-- top-rated-movie -->
    <section class="top-rated-movie tr-movie-bg" data-background="app/img/bg/tr_movies_bg.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-50">
                        <span class="sub-title">ONLINE STREAMING</span>
                        <h2 class="title">Top Rated Movies</h2>
                    </div>
                </div>
            </div>
            <!-- <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="tr-movie-menu-active text-center">
                        <button class="active" data-filter="*">TV Shows</button>
                        <button class="" data-filter=".cat-one">Movies</button>
                        <button class="" data-filter=".cat-two">documentary</button>
                        <button class="" data-filter=".cat-three">sports</button>
                    </div>
                </div>
            </div> -->
            <div class="row tr-movie-active">
                @foreach($video as $vk => $vv)
                <div class="col-xl-3 col-lg-4 col-sm-3 col-xs-3 grid-item grid-sizer cat-two">
                    
                        <div class="movie-item mb-60">
                            <div class="movie-poster">
                                <a href="movie-details.html"><img src="{{ asset('thumbUploads/'.$vv->image) }}" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="top">
                                    <h5 class="title"><a href="{{ route('movie.movieDetails',$vv->id) }}">{{ $vv->name }}</a></h5>
                                    <span class="date">{{ $vv->year }}</span>
                                </div>
                                <div class="bottom">
                                    <ul>
                                        <li><span class="quality">hd</span></li>
                                        <li>
                                            <span class="duration"><i class="far fa-clock"></i> {{ $vv->duration }}</span>
                                            <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                
                <!-- <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-one cat-three">
                    <div class="movie-item mb-60">
                        <div class="movie-poster">
                            <a href="movie-details.html"><img src="app/img/poster/ucm_poster02.jpg" alt=""></a>
                        </div>
                        <div class="movie-content">
                            <div class="top">
                                <h5 class="title"><a href="movie-details.html">The Perfect Match</a></h5>
                                <span class="date">2021</span>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li><span class="quality">4k</span></li>
                                    <li>
                                        <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                        <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                    <div class="movie-item mb-60">
                        <div class="movie-poster">
                            <a href="movie-details.html"><img src="app/img/poster/ucm_poster03.jpg" alt=""></a>
                        </div>
                        <div class="movie-content">
                            <div class="top">
                                <h5 class="title"><a href="movie-details.html">The Dog Woof</a></h5>
                                <span class="date">2021</span>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li><span class="quality">hd</span></li>
                                    <li>
                                        <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                        <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-one cat-three">
                    <div class="movie-item mb-60">
                        <div class="movie-poster">
                            <a href="movie-details.html"><img src="app/img/poster/ucm_poster04.jpg" alt=""></a>
                        </div>
                        <div class="movie-content">
                            <div class="top">
                                <h5 class="title"><a href="movie-details.html">The Easy Reach</a></h5>
                                <span class="date">2021</span>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li><span class="quality">8K</span></li>
                                    <li>
                                        <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                        <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                    <div class="movie-item mb-60">
                        <div class="movie-poster">
                            <a href="movie-details.html"><img src="app/img/poster/ucm_poster05.jpg" alt=""></a>
                        </div>
                        <div class="movie-content">
                            <div class="top">
                                <h5 class="title"><a href="movie-details.html">The Cooking</a></h5>
                                <span class="date">2021</span>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li><span class="quality">3D</span></li>
                                    <li>
                                        <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                        <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-one cat-three">
                    <div class="movie-item mb-60">
                        <div class="movie-poster">
                            <a href="movie-details.html"><img src="app/img/poster/ucm_poster06.jpg" alt=""></a>
                        </div>
                        <div class="movie-content">
                            <div class="top">
                                <h5 class="title"><a href="movie-details.html">The Hikaru</a></h5>
                                <span class="date">2021</span>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li><span class="quality">hd</span></li>
                                    <li>
                                        <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                        <span class="rating"><i class="fas fa-thumbs-up"></i> 3.9</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                    <div class="movie-item mb-60">
                        <div class="movie-poster">
                            <a href="movie-details.html"><img src="app/img/poster/ucm_poster07.jpg" alt=""></a>
                        </div>
                        <div class="movie-content">
                            <div class="top">
                                <h5 class="title"><a href="movie-details.html">Life Quotes</a></h5>
                                <span class="date">2021</span>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li><span class="quality">4K</span></li>
                                    <li>
                                        <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                        <span class="rating"><i class="fas fa-thumbs-up"></i> 3.9</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-one cat-three">
                    <div class="movie-item mb-60">
                        <div class="movie-poster">
                            <a href="movie-details.html"><img src="app/img/poster/ucm_poster08.jpg" alt=""></a>
                        </div>
                        <div class="movie-content">
                            <div class="top">
                                <h5 class="title"><a href="movie-details.html">The Beachball</a></h5>
                                <span class="date">2021</span>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li><span class="quality">4K</span></li>
                                    <li>
                                        <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                        <span class="rating"><i class="fas fa-thumbs-up"></i> 3.9</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- top-rated-movie-end -->

    <!-- live-area -->
    <section class="live-area live-bg fix" data-background="app/img/bg/live_bg.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="section-title title-style-two mb-25">
                        <span class="sub-title">ONLINE STREAMING</span>
                        <h2 class="title">Live Movie & TV Shows For Friends & Family</h2>
                    </div>
                    <div class="live-movie-content">
                        <p>Lorem ipsum dolor sit amet, consecetur adipiscing elseddo eiusmod There are many variations of passages of lorem Ipsum
                        available, but the majority have suffered alteration.</p>
                        <div class="live-fact-wrap">
                            <div class="resolution">
                                <h2>HD 4K</h2>
                            </div>
                            <div class="active-customer">
                                <h4><span class="odometer" data-count="20"></span>K+</h4>
                                <p>Active Customer</p>
                            </div>
                        </div>
                        <!-- <a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="btn popup-video"><i class="fas fa-play"></i> Watch Now</a> -->
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="live-movie-img wow fadeInRight" data-wow-delay=".2s" data-wow-duration="1.8s">
                        <img src="app/img/images/live_img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- live-area-end -->

    <!-- tv-series-area -->
    <!-- <section class="tv-series-area tv-series-bg" data-background="app/img/bg/tv_series_bg.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-50">
                        <span class="sub-title">Best TV Series</span>
                        <h2 class="title">World Best TV Series</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="movie-item mb-50">
                        <div class="movie-poster">
                            <a href="movie-details.html"><img src="app/img/poster/ucm_poster09.jpg" alt=""></a>
                        </div>
                        <div class="movie-content">
                            <div class="top">
                                <h5 class="title"><a href="movie-details.html">Women's Day</a></h5>
                                <span class="date">2021</span>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li><span class="quality">hd</span></li>
                                    <li>
                                        <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                        <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="movie-item mb-50">
                        <div class="movie-poster">
                            <a href="movie-details.html"><img src="app/img/poster/ucm_poster10.jpg" alt=""></a>
                        </div>
                        <div class="movie-content">
                            <div class="top">
                                <h5 class="title"><a href="movie-details.html">The Perfect Match</a></h5>
                                <span class="date">2021</span>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li><span class="quality">4k</span></li>
                                    <li>
                                        <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                        <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="movie-item mb-50">
                        <div class="movie-poster">
                            <a href="movie-details.html"><img src="app/img/poster/ucm_poster03.jpg" alt=""></a>
                        </div>
                        <div class="movie-content">
                            <div class="top">
                                <h5 class="title"><a href="movie-details.html">The Dog Woof</a></h5>
                                <span class="date">2021</span>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li><span class="quality">hd</span></li>
                                    <li>
                                        <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                        <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="movie-item mb-50">
                        <div class="movie-poster">
                            <a href="movie-details.html"><img src="app/img/poster/ucm_poster04.jpg" alt=""></a>
                        </div>
                        <div class="movie-content">
                            <div class="top">
                                <h5 class="title"><a href="movie-details.html">The Easy Reach</a></h5>
                                <span class="date">2021</span>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li><span class="quality">hd</span></li>
                                    <li>
                                        <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                        <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- tv-series-area-end -->

</main>
<!-- main-area-end -->
@endsection