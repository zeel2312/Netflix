@extends('layouts.app')
@section('title','Contact Us')
@section('content')

<!-- main-area -->
<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('app/img/bg/breadcrumb_bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">Contact Us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- contact-area -->
    <section class="contact-area contact-bg" data-background="{{asset('app/img/bg/contact_bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="contact-form-wrap">
                        <div class="widget-title mb-50">
                            <h5 class="title">Contact Form</h5>
                        </div>
                        <div class="contact-form">
                            <form action="{{ route('contact.contactSave') }}" method="post">
                            @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="name" placeholder="Enter Name *" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="email" placeholder="Enter Email *" required>
                                    </div>
                                </div>
                                <input type="text" name="subject" placeholder="Subject *" required>
                                <textarea name="message" placeholder="Type Your Message..."></textarea>
                                <button type="submit" name="submit" class="btn">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
                @php
                    $emaillink = App\Models\Settings::where('key', 'EMAILLINK')->first();
                @endphp
                <div class="col-xl-4 col-lg-5">
                    <div class="widget-title mb-50">
                        <h5 class="title">Information</h5>
                    </div>
                    <div class="contact-info-wrap">
                        <p><span>Find solutions :</span> to common problems, or get help from a support agent industry's standard .</p>
                        <div class="contact-info-list">
                            <ul>
                                <li>
                                    <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                                    <p><span>Address :</span> Finlark Technologies, Ahmedabad </p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-phone-alt"></i></div>
                                    <p><span>Phone :</span> (+91) 9638788737 </p>
                                </li>
                                <li>
                                    <div class="icon"><a href="{{ $emaillink->value }}" target="_blank"><i class="fas fa-envelope" style="color: black !important;"></i></a></div>
                                    <p><span>Email :</span> connect@finlark.com </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->

    <!-- map -->
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.2957188385476!2d72.51115991478498!3d23.012911884957955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b2975b8b0c7%3A0xf7bbda8be00bdb4a!2sFinlark%20Technologies!5e0!3m2!1sen!2sin!4v1654593255289!5m2!1sen!2sin" allowfullscreen></iframe>
    </div>
    <!-- map-end -->
    
</main>
<!-- main-area-end -->
@endsection