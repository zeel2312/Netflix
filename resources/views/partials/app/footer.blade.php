<!-- footer-area -->
<footer>
    <div class="footer-top-wrap">
        <div class="container">
            <div class="footer-menu-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="footer-logo">
                            <a href="{{ route('home') }}"><img src="{{ asset('app/img/logo/logo.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="footer-menu">
                            <nav>
                                <ul class="navigation">
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('movie.movie') }}">Movie</a></li>
                                    <li><a href="{{ route('home') }}">pages</a></li>
                                    <li><a href="{{ route('pricing.pricing') }}">Pricing</a></li>
                                </ul>
                                <div class="footer-search">
                                    <form action="#">
                                        <input type="text" placeholder="Find Favorite Movie">
                                        <button><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-quick-link-wrap">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="quick-link-list">
                            <ul>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privacy</a></li>
                            </ul>
                        </div>
                    </div>
                    @php
                        $fblink = App\Models\Settings::where('key', 'FBLINK')->first();
                        $instalink = App\Models\Settings::where('key', 'INSTALINK')->first();
                        $dribblelink = App\Models\Settings::where('key', 'DRIBBLELINK')->first();
                        $linkedinlink = App\Models\Settings::where('key', 'LINKEDINLINK')->first();
                    @endphp
                    <div class="col-md-5">
                        <div class="footer-social">
                            <ul>
                                <li><a href="{{ !is_null($fblink) ? $fblink->value : '#' }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{ $instalink->value }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="{{ $dribblelink->value }}" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="{{ $linkedinlink->value }}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="copyright-text">
                        <p>Copyright &copy; 2022 All Rights Reserved, Share By <a href="https://finlark.com/" target="_blank">Finlark Technologies</a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="payment-method-img text-center text-md-right">
                        <img src="{{ asset('app/img/images/card_img.png') }}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-area-end -->