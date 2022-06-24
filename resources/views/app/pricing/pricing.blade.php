@extends('layouts.app')
@section('title','Pricing')
@section('content')

<!-- main-area -->
<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="app/img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">Our Plan</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Pricing</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- pricing-area -->
    <section class="pricing-area pricing-bg" data-background="app/img/bg/pricing_bg.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title title-style-three text-center mb-70">
                        <span class="sub-title">our pricing plans</span>
                        <h2 class="title">Our Pricing Strategy</h2>
                    </div>
                </div>
            </div>
            <div class="pricing-box-wrap">
                <div class="row justify-content-center">
                    @if(count($pricing)>0)
                        @foreach($pricing as $pk => $pv)
                            <div class="col-lg-4 col-md-6 col-sm-8">
                                <div class="pricing-box-item mb-30">
                                    <div class="pricing-top">
                                        <h6>{{ $pv->name }}</h6>
                                        <div class="price">
                                            <h3>${{ $pv->price }}</h3>
                                            <span>Monthly</span>
                                        </div>
                                    </div>
                                    <div class="pricing-list">
                                        <ul>
                                            <li class="quality"><i class="fas fa-check"></i> Video quality <span>Good</span></li>
                                            <li><i class="fas fa-check"></i> Resolution <span>{{ $pv->description }}</span></li>
                                            <li><i class="fas fa-check"></i> Screens you can watch <span>{{ $pv->no_of_devices }}</span></li>
                                            <li><i class="fas fa-check"></i> Cancel anytime</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-btn">
                                        <a href="#" class="btn">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h1>No plan found</h1>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- pricing-area-end -->

</main>
<!-- main-area-end -->
@endsection