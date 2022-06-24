@extends('layouts.app')
@section('title','Movie-Details')
@section('content')

<!-- main-area -->
<main>

    <!-- movie-details-area -->
    <section class="movie-details-area" data-background="{{ asset('app/img/bg/movie_details_bg.jpg') }}">
        <div class="container">
            <div class="row align-items-center position-relative">
                <div class="col-xl-3 col-lg-4">
                    <div class="movie-details-img">
                        <img src="{{ asset('thumbUploads/'.$video->image) }}" alt="">
                        <a href="{{ asset('videoUploads/'.$video->video) }}" class="popup-video"><img src="{{asset('app/img/images/play_icon.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8">
                    <div class="movie-details-content">
                        <h5>New Episodes</h5>
                        <h2>{{ $video->name }}</h2>
                        <div class="banner-meta">
                            <ul>
                                <li class="quality">
                                    <span>hd</span>
                                </li>
                                <li class="category">
                                    <a href="#">{{ $video->category->name }},</a>
                                    <a href="#">{{ $video->subcategory->name }}</a>
                                </li>
                                <li class="release-time">
                                    <span><i class="far fa-calendar-alt"></i>{{ $video->year }}</span>
                                    <span><i class="far fa-clock"></i>{{ $video->duration }}</span>
                                </li>
                            </ul>
                        </div>
                        <p>{{ $video->description }}</p>
                        <div class="movie-details-prime">
                            <ul>
                                <li class="share"><a href="#"><i class="fas fa-share-alt"></i> Share</a></li>
                                <li class="streaming">
                                    <h6>Prime Video</h6>
                                    <span>Streaming Channels</span>
                                </li>
                                <li class="watch">
                                    <a href="{{ asset('videoUploads/'.$video->video) }}" class="btn popup-video">
                                        <i class="fas fa-play"></i> 
                                        Watch Now
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- movie-details-area-end -->

</main>
<!-- main-area-end -->
@endsection